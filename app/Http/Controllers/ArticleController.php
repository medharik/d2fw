<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function create(){
    
        return view('articles/create');
    }
    function store(Request $request){

        Article::create($request->all());
    
        echo "ok";
        // return view('articles/create');
    }
    public function newProduit()
    {
        return view('articles.new',['titre'=>"Nouveau produit",'nb'=>"le prix doit etre >0 :"]);
    
    }
    public function stocker(Request $request)
    {
        // dd($request->all());
        // echo "je suis dans stocker() di controller ArticleController ";
        // Article::create(['libelle'=>$request->libelle,'prix'=>$request->prix,'qte'=>$request->qte]);
        Article::create($request->all());
        return view("articles.new",['titre'=>'Ajout effectue avec succes']);
    }
}
