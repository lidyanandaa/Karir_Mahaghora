<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputinternshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputinternship', function (Blueprint $table) {
            $table->increments('id_inputinternship');
            $table->longText('konten1');
            $table->longText('konten2');
            $table->longText('judul1');
            $table->longText('konten3');
            $table->longText('konten4');
            $table->longText('konten5');
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
        Schema::dropIfExists('inputinternship');
    }
}
