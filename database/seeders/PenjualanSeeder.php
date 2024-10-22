<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1, 
                'user_id' => 3, 
                'pembeli' => 'Adi',
                'penjualan_kode' => 'P1',
                'penjualan_tanggal' => '2024-02-11',
            ],
            [
                'penjualan_id' => 2, 
                'user_id' => 3, 
                'pembeli' => 'Bayu',
                'penjualan_kode' => 'P2',
                'penjualan_tanggal' => '2024-02-11',
            ],
            [
                'penjualan_id' => 3, 
                'user_id' => 3, 
                'pembeli' => 'Chandra',
                'penjualan_kode' => 'P3',
                'penjualan_tanggal' => '2024-02-11',
            ],
            [
                'penjualan_id' => 4, 
                'user_id' => 3, 
                'pembeli' => 'Denis',
                'penjualan_kode' => 'P4',
                'penjualan_tanggal' => '2024-02-11',
            ],
            [
                'penjualan_id' => 5, 
                'user_id' => 3, 
                'pembeli' => 'Edo',
                'penjualan_kode' => 'P5',
                'penjualan_tanggal' => '2024-03-11',
            ],
            [
                'penjualan_id' => 6, 
                'user_id' => 3, 
                'pembeli' => 'Farid',
                'penjualan_kode' => 'P6',
                'penjualan_tanggal' => '2024-03-11',
            ],
            [
                'penjualan_id' => 7, 
                'user_id' => 3, 
                'pembeli' => 'Gilang',
                'penjualan_kode' => 'P7',
                'penjualan_tanggal' => '2024-02-11',
            ],
            [
                'penjualan_id' => 8, 
                'user_id' => 3, 
                'pembeli' => 'Heri',
                'penjualan_kode' => 'P8',
                'penjualan_tanggal' => '2024-03-11',
            ],
            [
                'penjualan_id' => 9, 
                'user_id' => 3, 
                'pembeli' => 'Indah',
                'penjualan_kode' => 'P9',
                'penjualan_tanggal' => '2024-04-11',
            ],
            [
                'penjualan_id' => 10, 
                'user_id' => 3, 
                'pembeli' => 'Jimi',
                'penjualan_kode' => 'P10',
                'penjualan_tanggal' => '2024-05-11',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
