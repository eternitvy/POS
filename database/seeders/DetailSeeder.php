<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $getHarga = function($id) {
            return DB::table('m_barang')->where('barang_id', $id)->value('harga_jual');
        };

        $data = [
            ['detail_id' => 1, 'penjualan_id' => '1', 'barang_id' => 2, 'harga' => $getHarga(2), 'jumlah' => 1],
            ['detail_id' => 2, 'penjualan_id' => '1', 'barang_id' => 5, 'harga' => $getHarga(5), 'jumlah' => 3],
            ['detail_id' => 3, 'penjualan_id' => '1', 'barang_id' => 4, 'harga' => $getHarga(4), 'jumlah' => 2],

            ['detail_id' => 4, 'penjualan_id' => '2', 'barang_id' => 8, 'harga' => $getHarga(8), 'jumlah' => 5],
            ['detail_id' => 5, 'penjualan_id' => '2', 'barang_id' => 11, 'harga' => $getHarga(11), 'jumlah' => 2],
            ['detail_id' => 6, 'penjualan_id' => '2', 'barang_id' => 1, 'harga' => $getHarga(1), 'jumlah' => 2],

            ['detail_id' => 7, 'penjualan_id' => '3', 'barang_id' => 3, 'harga' => $getHarga(3), 'jumlah' => 1],
            ['detail_id' => 8, 'penjualan_id' => '3', 'barang_id' => 6, 'harga' => $getHarga(6), 'jumlah' => 1],
            ['detail_id' => 9, 'penjualan_id' => '3', 'barang_id' => 15, 'harga' => $getHarga(15), 'jumlah' => 1],

            ['detail_id' => 10, 'penjualan_id' => '4', 'barang_id' => 9, 'harga' => $getHarga(9), 'jumlah' => 1],
            ['detail_id' => 11, 'penjualan_id' => '4', 'barang_id' => 10, 'harga' => $getHarga(10), 'jumlah' => 3],
            ['detail_id' => 12, 'penjualan_id' => '4', 'barang_id' => 7, 'harga' => $getHarga(7), 'jumlah' => 2],

            ['detail_id' => 13, 'penjualan_id' => '5', 'barang_id' => 13, 'harga' => $getHarga(13), 'jumlah' => 1],
            ['detail_id' => 14, 'penjualan_id' => '5', 'barang_id' => 4, 'harga' => $getHarga(4), 'jumlah' => 3],
            ['detail_id' => 15, 'penjualan_id' => '5', 'barang_id' => 9, 'harga' => $getHarga(9), 'jumlah' => 1],

            ['detail_id' => 16, 'penjualan_id' => '6', 'barang_id' => 1, 'harga' => $getHarga(1), 'jumlah' => 4],
            ['detail_id' => 17, 'penjualan_id' => '6', 'barang_id' => 4, 'harga' => $getHarga(4), 'jumlah' => 2],
            ['detail_id' => 18, 'penjualan_id' => '6', 'barang_id' => 14, 'harga' => $getHarga(14), 'jumlah' => 1],

            ['detail_id' => 19, 'penjualan_id' => '7', 'barang_id' => 7, 'harga' => $getHarga(7), 'jumlah' => 1],
            ['detail_id' => 20, 'penjualan_id' => '7', 'barang_id' => 2, 'harga' => $getHarga(2), 'jumlah' => 2],
            ['detail_id' => 21, 'penjualan_id' => '7', 'barang_id' => 11, 'harga' => $getHarga(11), 'jumlah' => 1],

            ['detail_id' => 22, 'penjualan_id' => '8', 'barang_id' => 2, 'harga' => $getHarga(2), 'jumlah' => 2],
            ['detail_id' => 23, 'penjualan_id' => '8', 'barang_id' => 5, 'harga' => $getHarga(5), 'jumlah' => 2],
            ['detail_id' => 24, 'penjualan_id' => '8', 'barang_id' => 8, 'harga' => $getHarga(8), 'jumlah' => 1],

            ['detail_id' => 25, 'penjualan_id' => '9', 'barang_id' => 14, 'harga' => $getHarga(14), 'jumlah' => 1],
            ['detail_id' => 26, 'penjualan_id' => '9', 'barang_id' => 13, 'harga' => $getHarga(13), 'jumlah' => 1],
            ['detail_id' => 27, 'penjualan_id' => '9', 'barang_id' => 6, 'harga' => $getHarga(6), 'jumlah' => 2],

            ['detail_id' => 28, 'penjualan_id' => '10', 'barang_id' => 3, 'harga' => $getHarga(3), 'jumlah' => 1],
            ['detail_id' => 29, 'penjualan_id' => '10', 'barang_id' => 12, 'harga' => $getHarga(12), 'jumlah' => 1],
            ['detail_id' => 30, 'penjualan_id' => '10', 'barang_id' => 10, 'harga' => $getHarga(10), 'jumlah' => 1],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
