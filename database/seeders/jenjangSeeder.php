<?php

namespace Database\Seeders;

use App\Models\jenjangModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class jenjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        jenjangModel::create([
            'nama' => 'S1',

        ]);

        jenjangModel::create([
            'nama' => 'S2',

        ]);
    }
}
