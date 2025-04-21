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

        DB::table('m_barang')->insert([
            [
                'barang_kode' => 'PRD001',
                'barang_nama' => 'Smartphone Galaxy S22',
                'kategori_id' => 1, // Elektronik
                'harga_beli' => 12000000,
                'harga_jual' => 15000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_kode' => 'PRD002',
                'barang_nama' => 'Laptop MacBook Pro',
                'kategori_id' => 1, // Elektronik
                'harga_beli' => 25000000,
                'harga_jual' => 30000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_kode' => 'PRD003',
                'barang_nama' => 'Jaket Denim Uniqlo',
                'kategori_id' => 2, // Fashion
                'harga_beli' => 350000,
                'harga_jual' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_kode' => 'PRD004',
                'barang_nama' => 'Sepatu Nike Air Max',
                'kategori_id' => 2, // Fashion
                'harga_beli' => 1200000,
                'harga_jual' => 1500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_kode' => 'PRD005',
                'barang_nama' => 'Coklat SilverQueen',
                'kategori_id' => 3, // Makanan & Minuman
                'harga_beli' => 25000,
                'harga_jual' => 35000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_kode' => 'PRD006',
                'barang_nama' => 'Teh Botol Sosro',
                'kategori_id' => 3, // Makanan & Minuman
                'harga_beli' => 3000,
                'harga_jual' => 5000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_kode' => 'PRD007',
                'barang_nama' => 'Meja Kayu Jati',
                'kategori_id' => 4, // Furniture
                'harga_beli' => 2000000,
                'harga_jual' => 3000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_kode' => 'PRD008',
                'barang_nama' => 'Sofa Minimalis',
                'kategori_id' => 4, // Furniture
                'harga_beli' => 3000000,
                'harga_jual' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_kode' => 'PRD009',
                'barang_nama' => 'Helm KYT Full Face',
                'kategori_id' => 5, // Otomotif
                'harga_beli' => 500000,
                'harga_jual' => 750000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_kode' => 'PRD010',
                'barang_nama' => 'Oli Mesin Pertamina',
                'kategori_id' => 5, // Otomotif
                'harga_beli' => 80000,
                'harga_jual' => 120000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        }
    }