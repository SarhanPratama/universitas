<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prodi', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idfak');
            $table->index('idfak')->references('id')->on('fakultas')
            ->onUpdate('casecade')->onDelete('casecade');
           
            $table->integer('kode')->unique();
            $table->string('nama');
            
            $table->unsignedBigInteger('idjenjang');
            $table->index('idjenjang')->references('id')->on('jenjang');

            $table->date('tglsk');
            $table->string('akreditasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodi');
    }
};
