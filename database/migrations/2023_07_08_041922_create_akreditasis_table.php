<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkreditasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akreditasi', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('nilai');
            $table->json('options');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedInteger('komponen_id')->nullable();

            $table->foreign('user_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->foreign('komponen_id')->nullable()->references('komponen_id')->on('komponens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akreditasis');
    }
}
