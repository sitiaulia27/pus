<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubPertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_pertanyaans', function (Blueprint $table) {
            $table->bigIncrements('sub_pertanyaan_id');
            $table->unsignedBigInteger('id_pertanyaan')->nullable();
            $table->longText('nama_sub_pertanyaan');
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
        Schema::dropIfExists('sub_pertanyaans');
    }
}
