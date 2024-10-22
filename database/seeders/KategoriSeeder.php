<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1, 
                'kategori_kode' => 'K1', 
                'kategori_nama' => 'Sabun',
            ],
            [
                'kategori_id' => 2, 
                'kategori_kode' => 'K2', 
                'kategori_nama' => 'Pakaian', 
            ],
            [
                'kategori_id' => 3, 
                'kategori_kode' => 'K3',
                'kategori_nama' => 'Snack',
            ],
            [
                'kategori_id' => 4, 
                'kategori_kode' => 'K4',
                'kategori_nama' => 'Permen',
            ],
            [
                'kategori_id' => 5, 
                'kategori_kode' => 'K5',
                'kategori_nama' => 'Minuman',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
