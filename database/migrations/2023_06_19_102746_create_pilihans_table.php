<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilihans', function (Blueprint $table) {
            $table->bigIncrements('id_pilihan');
            $table->unsignedBigInteger('id_pertanyaan')->nullable();
            $table->unsignedBigInteger('sub_pertanyaan_id')->nullable();
            $table->longText('nama_pilihan');
            $table->Integer('bobot');
            $table->timestamps();

            $table->foreign('id_pertanyaan')->references('id_pertanyaan')->on('pertanyaans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pilihans');
    }
}
