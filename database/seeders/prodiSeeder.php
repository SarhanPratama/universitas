<?php

namespace Database\Seeders;

use App\Models\prodiModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class prodiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        prodiModel::create([
            'idfak' => '1',
            'kode' => '23232',
            'nama' => 'SISTEM INFORMASI',                    
            'idjenjang' => '1',                    
            'tglsk' => '2023-12-10',                    
            'akreditasi' => 'A',                    
        ]);

        prodiModel::create([
            'idfak' => '2',
            'kode' => '122333',
            'nama' => 'GIZI',       
            'idjenjang' => '2',       
            'tglsk' => '2023-12-12',       
            'akreditasi' => 'B',       
        ]);
    }
}
