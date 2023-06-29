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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_aplikasi');
            $table->string('nama_pengaduan');
            $table->text('deskripsi')->nullable();
            // $table->enum('prioritas',['Low','Medium','High','Urgent'])->nullable();
            $table->enum('status', ['Baru', 'Develop', 'Selesai'])->default('Baru')->nullable();
            $table->dateTime('tgl_mulai');
            $table->dateTime('tgl_selesai')->nullable();
            $table->integer('no_pengaduan')->nullable();
            // $table->integer('no_urut')->nullable();
            $table->string('slug');
            $table->foreign('id_aplikasi')->references('id')->on('aplikasis')->onUpdate('cascade');
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
        Schema::dropIfExists('pengaduans');
    }
};
