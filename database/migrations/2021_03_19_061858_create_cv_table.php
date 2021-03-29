<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv', function (Blueprint $table) {
            $table->increments('id_cv');
            $table->string('nama_lengkap_cv');
            $table->char('jenis_kelamin_cv',1);            
            $table->string('email_cv',100);
            $table->string('no_hp_cv',13);
            $table->string('pendidikan_terakhir_cv');         
            $table->string('nama_berkas_cv',200);
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
        Schema::dropIfExists('cv');
    }
}
