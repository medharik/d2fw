<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable=['nom'];
    /**
     * Get all of the produits for the Categorie
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produits(): HasMany
    {
        return $this->hasMany(Produit::class);
    }
}
