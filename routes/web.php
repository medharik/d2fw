<?php

use App\Http\Controllers\ArticleController;
use App\Models\Produit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
/*
|--------------------------------------------------------------------------
| Web Routes :
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('produit/{id?}', function($id=0)
{
    return view("produits.show",['produit'=>Produit::find($id),'nom'=>'harik']);
}
)->name('produit');
Route::resource('produits', ProduitController::class);
Route::resource('categories', CategorieController::class);
// Route::resource('user', UserController::class);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/article/create', [ArticleController::class,'create']);
Route::post('/article', [ArticleController::class,'store']);
Route::get('/article/new', [ArticleController::class, 'newProduit'])->name('nouveau_produit');
Route::post('/arti', [ArticleController::class, 'stocker'])->name('produits.store');
