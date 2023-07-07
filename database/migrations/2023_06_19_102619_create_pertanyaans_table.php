<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaans', function (Blueprint $table) {
            $table->bigIncrements('id_pertanyaan');
            $table->unsignedInteger('sub_komponen_id')->nullable();
            $table->unsignedInteger('sub_sub_komponen_id')->nullable();
            $table->longText('nama_pertanyaan');
            // $table->enum('jenis_pilihan', ['satu', 'banyak']);
            $table->integer('nilai')->nullable();
            $table->timestamps();

            $table->foreign('sub_komponen_id')->nullable()->references('sub_komponen_id')->on('sub_komponens')->onDelete('cascade');
            $table->foreign('sub_sub_komponen_id')->nullable()->references('sub_sub_komponen_id')->on('sub_sub_komponens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaans');
    }
}
