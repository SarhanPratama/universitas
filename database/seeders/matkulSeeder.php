<?php

namespace Database\Seeders;

use App\Models\matkulModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class matkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        matkulModel::create([
            'kode' => '876868',
            'nama' => 'PRAKTIKUM WEB DINAMIS',                    
            'sks' => '1',                    
        ]);

        matkulModel::create([
            'kode' => '122323',
            'nama' => 'WEB DINAMIS',       
            'sks' => '3',       
        ]);
    }
}
