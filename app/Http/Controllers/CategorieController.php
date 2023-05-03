<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.form');
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
            'nom' => 'required|min:2|unique:categories|regex:#^[a-z]#',
            
        ]);
        // $request->validate([
        //     'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        // ]);
       
        Categorie::create($request->all());
        return redirect()->route('categories.index')->with(['notice' => 'Ajout ok', 'class' => 'info']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categorie::find($id);
        return view('categories.show', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::find($id);
        return view('categories.edit', compact('categorie'));
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
            'nom' => 'required|min:2|unique:categories,id',
          
        ]);
        $Categorie = Categorie::find($id);
        $Categorie->update($request->all());
        return redirect()->route('categories.index')->with(['notice' => 'upd ok', 'class' => 'warning']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Categorie = Categorie::find($id);
        // $chemin = public_path('uploads/' . $Categorie->chemin);
        $Categorie->delete();
        // if(is_file($chemin))
        // unlink($chemin);
        // dd($chemin);
        return redirect()->route('categories.index')->with(['notice' => 'del ok', 'class' => 'danger']);
        // $Categorie->delete();
    }
}
