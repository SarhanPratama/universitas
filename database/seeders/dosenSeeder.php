<?php

namespace Database\Seeders;

use App\Models\dosenModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        dosenModel::create([
            'nidn' => '45458987',
            'nama' => 'budi.S.kom',
            'jk' => 'Laki-laki',
            'alamat' => 'jl. manggis',
            'telp' => '098653678',

        ]);
        dosenModel::create([
            'nidn' => '454987',
            'nama' => 'Syahril',
            'jk' => 'Perempuan',
            'alamat' => 'jl. mangga',
            'telp' => '0986535678',

        ]);
        dosenModel::create([
            'nidn' => '64455758',
            'nama' => 'Doni Winarso',
            'jk' => 'Laki-laki',
            'alamat' => 'jl. duku',
            'telp' => '0986535678',

        ]);
        dosenModel::create([
            'nidn' => '45488987',
            'nama' => 'Fakih',
            'jk' => 'Laki-laki',
            'alamat' => 'jl. Semangka',
            'telp' => '0986535678',

        ]);

    }
}
