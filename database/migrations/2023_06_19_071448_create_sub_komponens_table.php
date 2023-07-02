<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubKomponensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_komponens', function (Blueprint $table) {
            $table->increments('sub_komponen_id');
            $table->unsignedInteger('komponen_id');
            $table->string('nama_sub_komponen');
            $table->timestamps();

            $table->foreign('komponen_id')->references('komponen_id')->on('komponens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_komponens');
    }
}
