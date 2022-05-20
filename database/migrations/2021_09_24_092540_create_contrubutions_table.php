<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContrubutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrubutions', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('id_secret_campagne');
            $table->integer('id_campagnes');
            $table->integer('id_author');
            $table->string('nom_du_porteur');
            $table->string('photo');
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->string('numero');
            $table->string('montant');
            $table->string('payment');
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
        Schema::dropIfExists('contrubutions');
    }
}
