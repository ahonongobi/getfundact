<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePourcentagesTable extends Migration
{
    /**
     * Run the migrations.
     * /opt/lampp/htdocs/getfundafrica/database/migrations/2022_05_19_090640_create_pourcentages_table.php
     * @return void
     */
    public function up()
    {
        Schema::create('pourcentages', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->decimal('pourcentage',65,2);
            $table->string('message');
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
        Schema::dropIfExists('pourcentages');
    }
}
