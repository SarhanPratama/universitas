<?php

namespace Database\Seeders;

use App\Models\jadwalModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class jadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        jadwalModel::create([
            'idta' => '1',
            'iddosen' => '1',
            'idhari' => '1',                    
            'idkelas' => '1',                    
            'idruang' => '1',                    
            'idmatkul' => '1',                    
            'masuk' => '07:00:00',                    
            'keluar' => '09:00:00',                    
        ]);

        jadwalModel::create([
            'idta' => '2',
            'iddosen' => '2',
            'idhari' => '2',       
            'idkelas' => '2',       
            'idruang' => '2',       
            'idmatkul' => '2',       
            'masuk' => '07:00:00',       
            'keluar' => '09:00:00',       
        ]);
    }
}
