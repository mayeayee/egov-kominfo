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
        Schema::create('progres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_aplikasi');
            $table->enum('status',['Disposisi Surat', 'Analisis Awal', 'Analisis Kebutuhan', 'Coding', 'Testing', 'UAT', 'Selesai', 'Ditolak']);
            $table->string('catatan')->nullable();
            $table->dateTime('tanggal');
            $table->foreign('id_aplikasi')->references('id')->on('aplikasis')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            // $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progres');
    }
};
