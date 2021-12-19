<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('designation')->unique();
            $table->integer('prix')->nullable();
            $table->text('description')->nullable();
            $table->integer('quantite')->nullable();
            $table->string('image')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->date('dt_debut_favorie')->nullable();
            $table->date('dt_fin_favorie')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
