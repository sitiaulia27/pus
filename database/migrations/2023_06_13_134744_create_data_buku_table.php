<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul_buku');
            $table->date('tanggal_kembali')->format('Y-m-d'); // Menggunakan format tahun-bulan-hari (YYYY-MM-DD)
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
        Schema::dropIfExists('data_buku');
    }
}
