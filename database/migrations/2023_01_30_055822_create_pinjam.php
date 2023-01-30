<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_anggota');
            $table->unsignedBigInteger('no_buku');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->foreign('id_anggota')->references('id')->on('anggota');
            $table->foreign('no_buku')->references('id')->on('buku');
            
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
        Schema::dropIfExists('pinjam');
    }
};
