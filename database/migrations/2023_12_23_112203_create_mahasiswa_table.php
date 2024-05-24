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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->integer('nim')->unique();
            $table->string('nama');
            $table->enum('jk', ['Laki-laki', 'Perempuan']);
            $table->text('alamat');
            $table->text('telp');

            $table->unsignedInteger('dosen_pa');
            $table->index('dosen_pa')->references('id')->on('dosen')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('idprodi');
            $table->index('idprodi')->references('id')->on('prodi')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
