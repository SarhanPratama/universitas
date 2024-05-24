<?php

namespace Database\Seeders;

use App\Models\fakultasModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class fakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        fakultasModel::create([
            'kode' => '2123',
            'nama' => 'Ilmu Komputer',
            'iddosen' => '1',
        ]);
        fakultasModel::create([
            'kode' => '267223',
            'nama' => 'Ilmu Kedokteran',
            'iddosen' => '2',
        ]);
        fakultasModel::create([
            'kode' => '223',
            'nama' => 'Ilmu Kedokteran',
            'iddosen' => '3',
        ]);
        fakultasModel::create([
            'kode' => '4666',
            'nama' => 'Ilmu Kedokteran',
            'iddosen' => '4',
        ]);
    }
}
