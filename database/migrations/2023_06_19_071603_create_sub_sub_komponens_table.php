<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSubKomponensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_sub_komponens', function (Blueprint $table) {
            $table->increments('sub_sub_komponen_id');
            $table->unsignedInteger('sub_komponen_id');
            $table->string('nama_sub_sub_komponen');
            $table->timestamps();

            $table->foreign('sub_komponen_id')->references('sub_komponen_id')->on('sub_komponens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_sub_komponens');
    }
}
