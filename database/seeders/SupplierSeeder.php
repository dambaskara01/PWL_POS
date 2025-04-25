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
                'supplier_kode' => 'SUP-001',
                'nama_supplier' => 'Nusantara Supply Co.',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SUP-002',
                'nama_supplier' => 'Mega Logistic Group',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SUP-003',
                'nama_supplier' => 'Prima Niaga Abadi',
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
