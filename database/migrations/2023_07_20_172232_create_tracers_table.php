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
        Schema::create('tracers', function (Blueprint $table) {
            $table->id();
            $table->string('alumni_id')->unique();
            $table->string('code_pertanyaan_a');
            $table->string('code_pertanyaan_b');
            $table->string('nilai');
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
        Schema::dropIfExists('tracers');
    }
};
