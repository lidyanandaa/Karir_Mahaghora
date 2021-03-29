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
            $table->string('konten1');
            $table->string('konten2');
            $table->string('judul1');
            $table->string('konten3');
            $table->string('konten4');
            $table->string('konten5');
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
