<?php

namespace Database\Seeders;

use App\Models\ruangModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ruangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ruangModel::create([
            'kode' => '876868',
            'nama' => 'Gr 701',                    
        ]);

        ruangModel::create([
            'kode' => '122323',
            'nama' => 'Gr 702',       
        ]);
    }
}
