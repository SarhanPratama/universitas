<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tahunAkademikModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class tahunAkademikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tahunAkademikModel::create([
            'kode' => '20231',
            'nama' => '2023 Ganjil',
            
        ]);

        tahunAkademikModel::create([
            'kode' => '20232',
            'nama' => '2023 Genap',
            
        ]);
    }
}
