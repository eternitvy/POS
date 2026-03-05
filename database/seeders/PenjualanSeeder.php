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
                'pembeli' => 'Pelanggan A',
                'penjualan_kode' => 'PJN001',
                'penjualan_tanggal' => now()
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Pelanggan B',
                'penjualan_kode' => 'PJN002',
                'penjualan_tanggal' => now()
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Pelanggan C',
                'penjualan_kode' => 'PJN003',
                'penjualan_tanggal' => now()
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Pelanggan D',
                'penjualan_kode' => 'PJN004',
                'penjualan_tanggal' => now()
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Pelanggan E',
                'penjualan_kode' => 'PJN005',
                'penjualan_tanggal' => now()
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Pelanggan F',
                'penjualan_kode' => 'PJN006',
                'penjualan_tanggal' => now()
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Pelanggan G',
                'penjualan_kode' => 'PJN007',
                'penjualan_tanggal' => now()
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Pelanggan H',
                'penjualan_kode' => 'PJN008',
                'penjualan_tanggal' => now()
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Pelanggan I',
                'penjualan_kode' => 'PJN009',
                'penjualan_tanggal' => now()
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Pelanggan J',
                'penjualan_kode' => 'PJN010',
                'penjualan_tanggal' => now()
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
