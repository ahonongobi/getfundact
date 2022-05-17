<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampagnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campagnes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('categories');
            $table->string('name');
            $table->string('duree');
            $table->string('monnaie');
            $table->string('montant_v');
            $table->string('name_b');
            
            $table->string('where');
            $table->text('details');
            $table->text('details_ojectifs');
            $table->string('keys_word');
            $table->string('video')->nullable();
            $table->string('file_vignette');
            $table->string('file_couverture');
            $table->string('siteweb')->nullable();
            $table->string('hashtag');
            $table->text('detail_budget');
            $table->text('Details_budget_en');

            $table->string('hidden_cash')->default(0);
            $table->decimal('montant_cotise', 5,2)->nullable();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campagnes');
    }
}
