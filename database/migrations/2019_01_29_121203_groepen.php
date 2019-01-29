<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Groepen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('groepen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam_school');
            $table->string('contactpersoon');
            $table->string('email');
            $table->unsignedInteger('groep_grootte');
            $table->unsignedInteger('route');
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
        //
    }
}
