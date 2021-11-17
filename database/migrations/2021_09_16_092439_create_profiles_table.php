<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nom_prenoms');
            $table->string('date_naissance');
            $table->string('nationanlite');
            $table->string('pays');
            $table->string('email');
            $table->string('tel');
            $table->string('photo');

            $table->string('votre_addresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('region')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('numero_compte')->nullable();
            $table->string('numero_institution')->nullable();
            $table->string('iban')->nullable();
            $table->string('bic')->nullable();
            $table->string('nom_banque')->nullable();
            $table->string('code_agence')->nullable();


            $table->string('cni')->nullable();
            $table->string('s_cni')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
