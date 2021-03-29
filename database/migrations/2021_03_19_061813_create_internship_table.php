<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internship', function (Blueprint $table) {
            $table->increments('id_intern');
            $table->string('nama_lengkap_intern');
            $table->char('jenis_kelamin_intern',1);            
            $table->string('email_intern',100);
            $table->string('no_hp_intern',13);
            $table->string('instansi_intern');
            $table->char('jumlah_orang_intern',3);            
            $table->string('nama_berkas_intern',200);
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
        Schema::dropIfExists('internship');
    }
}
