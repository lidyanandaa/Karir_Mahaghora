<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->increments('id_lowongan');
            $table->string('nama_lowongan');
            $table->string('lokasi_penempatan', 150);
            $table->string('kategori', 150);
            $table->string('pengalaman');
            $table->bigInteger('gaji');
            $table->string('tentang_pekerjaan');
            $table->date('tanggal_awal');
            $table->date('tanggal_akhir');
            $table->string('batas_usia');
            $table->string('persyaratan');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lowongan');
    }
}
