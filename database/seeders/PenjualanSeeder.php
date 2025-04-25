<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        $tanggal = Carbon::now()->format('Y-m-d H:i:s');

        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Aldo Ramadhan',
                'penjualan_kode' => 'TRX-202401',
                'penjualan_tanggal' => $tanggal
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 1,
                'pembeli' => 'Nadya Kusuma',
                'penjualan_kode' => 'TRX-202402',
                'penjualan_tanggal' => $tanggal
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 1,
                'pembeli' => 'Yusuf Ardiansyah',
                'penjualan_kode' => 'TRX-202403',
                'penjualan_tanggal' => $tanggal
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Intan Maharani',
                'penjualan_kode' => 'TRX-202404',
                'penjualan_tanggal' => $tanggal
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 1,
                'pembeli' => 'Zaki Fadillah',
                'penjualan_kode' => 'TRX-202405',
                'penjualan_tanggal' => $tanggal
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 1,
                'pembeli' => 'Meutia Rahmani',
                'penjualan_kode' => 'TRX-202406',
                'penjualan_tanggal' => $tanggal
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Rio Mahendra',
                'penjualan_kode' => 'TRX-202407',
                'penjualan_tanggal' => $tanggal
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 1,
                'pembeli' => 'Sarah Dewanti',
                'penjualan_kode' => 'TRX-202408',
                'penjualan_tanggal' => $tanggal
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 1,
                'pembeli' => 'Gilang Perdana',
                'penjualan_kode' => 'TRX-202409',
                'penjualan_tanggal' => $tanggal
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'Vina Oktaviani',
                'penjualan_kode' => 'TRX-202410',
                'penjualan_tanggal' => $tanggal
            ],
        ];
        
        DB::table('t_penjualan')->insert($data);
        
    }
}