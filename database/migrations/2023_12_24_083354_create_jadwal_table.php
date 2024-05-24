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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->integer('idta');
            $table->index('idta')->references('id')->on('tahun_akdemik')
            ->onUpdate('casecade')->onDelete('casecade');

            $table->integer('iddosen');
            $table->index('iddosen')->references('id')->on('dosen')
            ->onUpdate('casecade')->onDelete('casecade');

            $table->integer('idhari');
            $table->index('idhari')->references('id')->on('hari')
            ->onUpdate('casecade')->onDelete('casecade');

            $table->integer('idkelas');
            $table->index('idkelas')->references('id')->on('kelas')
            ->onUpdate('casecade')->onDelete('casecade');

            $table->integer('idruang');
            $table->index('idruang')->references('id')->on('ruang')
            ->onUpdate('casecade')->onDelete('casecade');

            $table->integer('idmatkul');
            $table->unique('idmatkul')->references('id')->on('matkul')
            ->onUpdate('casecade')->onDelete('casecade');

            $table->time('masuk');
            $table->time('keluar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
