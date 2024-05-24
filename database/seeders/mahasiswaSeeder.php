<?php

namespace Database\Seeders;

use App\Models\mahasiswaModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        mahasiswaModel::create([
            'nim' => '220402063',
            'nama' => 'Sarhan Pratama',
            'jk' => 'Laki-laki',
            'alamat' => 'jl. manggis',
            'telp' => '09865356',
            'dosen_pa' => '1',

        ]);
        mahasiswaModel::create([
            'nim' => '22040232',
            'nama' => 'Putri',
            'jk' => 'Perempuan',
            'alamat' => 'jl. manggis',
            'telp' => '0986535678',
            'dosen_pa' => '2',

        ]);
    }
}
