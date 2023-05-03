<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function __cobstruct()
{
    //App::setLocale('fr');
}
    public function index()
    {
        $produits = Produit::all();
        $categories = Categorie::all();
        return view('produits.index', compact('produits','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();

        return view('produits.form',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'libelle' => 'required|min:2|unique:produits',
            'prix' => 'numeric',
            'chemin' => 'required|mimes:pdf,xlx,csv,jpeg,png,gif|max:2048',
        ]);
        // $request->validate([
        //     'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        // ]);
        $file = $request->file('chemin');
        // dd($file);
        $name = time() . '_' . $file->getClientOriginalName();
        $dossier="uploads";
        // $ext = $file->getClientOriginalExtension();
        $file->move($dossier,$name);
        $data = $request->all();
        $data['chemin'] = $dossier."/".$name;
        Produit::create($data);
        return redirect()->route('produits.index')->with(['notice' => 'Ajout ok', 'class' => 'info']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Produit::find($id);
        return view('produits.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produit::find($id);
        return view('produits.form2', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request   
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'libelle' => 'required|min:2|unique:produits,id',
            'prix' => 'required|numeric'
        ]);
        $produit = Produit::find($id);
        $produit->update($request->all());
        return redirect()->route('produits.index')->with(['notice' => 'upd ok', 'class' => 'warning']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::find($id);
        $chemin = public_path( $produit->chemin);
        $produit->delete();
        // dd($chemin);
        if(is_file($chemin)){
            unlink($chemin);

        }
        // dd($chemin);
        return redirect()->route('produits.index')->with(['notice' => 'del ok', 'class' => 'danger']);
        // $produit->delete();
    }
}
