<?php

namespace Database\Seeders;

use App\Models\kelasModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class kelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kelasModel::create([
            'kode' => '987',
            'nama' => 'A1',
            'idta' => '1',
            
        ]);

        kelasModel::create([
            'kode' => '123',
            'nama' => 'A2',
            'idta' => '2',
            
        ]);
    }
}
