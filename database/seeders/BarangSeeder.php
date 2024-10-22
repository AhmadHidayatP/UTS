<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1, 
                'kategori_id' => 1, 
                'barang_kode' => 'B1', 
                'barang_nama' => 'Lifebuoy',
                'harga_beli' => 5000,
                'harga_jual' => 6500,
            ],
            [
                'barang_id' => 2, 
                'kategori_id' => 1, 
                'barang_kode' => 'B2', 
                'barang_nama' => 'Dettol',
                'harga_beli' => 5500,
                'harga_jual' => 6500,
            ],
            [
                'barang_id' => 3, 
                'kategori_id' => 1, 
                'barang_kode' => 'B3', 
                'barang_nama' => 'Giv',
                'harga_beli' => 3500,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 4, 
                'kategori_id' => 2, 
                'barang_kode' => 'B4', 
                'barang_nama' => 'Erigo',
                'harga_beli' => 85000,
                'harga_jual' => 100000,
            ],
            [
                'barang_id' => 5, 
                'kategori_id' => 2, 
                'barang_kode' => 'B5', 
                'barang_nama' => 'H&M',
                'harga_beli' => 200000,
                'harga_jual' => 250000,
            ],
            [
                'barang_id' => 6, 
                'kategori_id' => 2, 
                'barang_kode' => 'B6', 
                'barang_nama' => '3Second',
                'harga_beli' => 15000,
                'harga_jual' => 25000,
            ],
            [
                'barang_id' => 7, 
                'kategori_id' => 3, 
                'barang_kode' => 'B7', 
                'barang_nama' => 'Jetz',
                'harga_beli' => 3500,
                'harga_jual' => 4500,
            ],
            [
                'barang_id' => 8, 
                'kategori_id' => 3, 
                'barang_kode' => 'B8', 
                'barang_nama' => 'Better',
                'harga_beli' => 1500,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 9, 
                'kategori_id' => 3, 
                'barang_kode' => 'B9', 
                'barang_nama' => 'Sukro',
                'harga_beli' => 500,
                'harga_jual' => 1000,
            ],
            [
                'barang_id' => 10, 
                'kategori_id' => 4, 
                'barang_kode' => 'B10', 
                'barang_nama' => 'Yupi',
                'harga_beli' => 150,
                'harga_jual' => 500,
            ],
            [
                'barang_id' => 11, 
                'kategori_id' => 4, 
                'barang_kode' => 'B11', 
                'barang_nama' => 'Kopiko',
                'harga_beli' => 150,
                'harga_jual' => 500,
            ],
            [
                'barang_id' => 12, 
                'kategori_id' => 4, 
                'barang_kode' => 'B12', 
                'barang_nama' => 'Relaxa',
                'harga_beli' => 150,
                'harga_jual' => 500,
            ],
            [
                'barang_id' => 13, 
                'kategori_id' => 5, 
                'barang_kode' => 'B13', 
                'barang_nama' => 'Teh Gelas',
                'harga_beli' => 1500,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 14, 
                'kategori_id' => 5, 
                'barang_kode' => 'B14', 
                'barang_nama' => 'Golda',
                'harga_beli' => 3000,
                'harga_jual' => 3500,
            ],
            [
                'barang_id' => 15, 
                'kategori_id' => 5, 
                'barang_kode' => 'B15', 
                'barang_nama' => 'Pocari',
                'harga_beli' => 5000,
                'harga_jual' => 6500,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
