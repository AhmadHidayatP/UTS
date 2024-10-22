<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1, 
                'supplier_kode' => 'S1', 
                'supplier_nama' => 'PT Supply Nusantara',
                'supplier_alamat' => 'Jl. Rantai Pasok No 1',
            ],
            [
                'supplier_id' => 2, 
                'supplier_kode' => 'S2', 
                'supplier_nama' => 'PT Jasa Sembako', 
                'supplier_alamat' => 'Jl. Rantai Pasok No 2',
            ],
            [
                'supplier_id' => 3, 
                'supplier_kode' => 'K3',
                'supplier_nama' => 'CV Indobaru',
                'supplier_alamat' => 'Jl. Rantai Pasok No 3',
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}