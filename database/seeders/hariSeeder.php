<?php

namespace Database\Seeders;

use App\Models\hariModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class hariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        hariModel::create([
            'nama' => 'Senin',

        ]);

        hariModel::create([
            'nama' => 'Selasa',

        ]);
    }
}
