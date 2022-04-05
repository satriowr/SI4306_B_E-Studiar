<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidangAjarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidang_ajars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_mentor')->unsigned()->index()->nullable();
            $table->foreign('id_mentor')->references('id')->on('mentors')->onDelete('cascade')->onUpdate('cascade');
            $table->string('bidang');
            $table->string('nama_kelas');
            $table->string('tarif');
            $table->longText('deskripsi');
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
        Schema::dropIfExists('bidang_ajars');
    }
}