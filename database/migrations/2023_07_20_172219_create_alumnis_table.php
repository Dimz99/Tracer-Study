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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->string('nama');
            $table->string('NIM')->unique();
            $table->string('telepon')->nullable();
            $table->string('gender');
            $table->string('thn_masuk')->nullable();
            $table->string('thn_keluar')->nullable();
            $table->string('prodi');
            $table->string('fakultas');
            $table->string('ttl')->nullable();
            $table->string('alamat')->nullable();
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
        Schema::dropIfExists('alumnis');
    }
};
