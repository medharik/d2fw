<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camions', function (Blueprint $table) {
            $table->id();
            $table->string("matricule");
            $table->double("prix");
            $table->double("marque");
            $table->timestamps();
        });
        //php artisan make:model Produit -m
        //editer vle fichier de migration
        //lancer la migration : 
        // php artisan migrate
        //php artisan migratge:refresh pour recreer toutes les tables de la base de donnees 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camions');
    }
}
