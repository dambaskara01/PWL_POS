<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_supplier')->insert([
            ['supplier_nama' => 'Supplier A'],
            ['supplier_nama' => 'Supplier B'],
            ['supplier_nama' => 'Supplier C'],
        ]);
    }
}
