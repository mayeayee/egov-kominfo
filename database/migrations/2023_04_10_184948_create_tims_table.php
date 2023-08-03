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
        Schema::create('tims', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_aplikasi')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->enum('role', [ "Project Manager", "System Analyst", "Programmer", "Quality Assurance"]);
            $table->foreign('id_aplikasi')->references('id')->on('aplikasis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tims');
    }
};
