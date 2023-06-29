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
        Schema::create('aplikasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_opd');
            $table->string('nama_aplikasi');
            $table->longText('deskripsi')->nullable();
            $table->enum('prioritas', ['Low', 'Medium', 'High', 'Urgent'])->nullable();
            $table->enum('status_projek', ['Disposisi Surat', 'Analisis Awal', 'Analisis Kebutuhan', 'Coding', 'Testing', 'UAT', 'Selesai', 'Ditolak'])->nullable();
            $table->enum('status_aplikasi', ['Running', 'Perbaikan', 'Tidak Aktif', 'Semi Aktif', 'Progres', 'Antrian', 'Inisiasi'])->nullable();
            $table->enum('type_aplikasi', ['WEB', 'Aplikasi'])->nullable();
            $table->dateTime('tgl_mulai')->nullable();
            $table->dateTime('tgl_selesai')->nullable();
            $table->integer('progres')->default(0);
            $table->integer('no_urut')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('cp')->nullable();
            $table->string('slug');
            $table->enum('arsip', ['yes', 'no'])->default('no');
            $table->foreign('id_opd')->references('id')->on('data_opds')->onUpdate('cascade');
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
        Schema::dropIfExists('aplikasis');
    }
};
