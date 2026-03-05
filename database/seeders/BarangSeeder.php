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
                'barang_id'=> 1,
                'kategori_id' => 1,
                'barang_kode' => 'B01',
                'barang_nama' => 'Roti Tawar',
                'harga_beli' => 20000,
                'harga_jual' => 21000,
            ],
            [
                'barang_id'=> 2,
                'kategori_id' => 2,
                'barang_kode' => 'B02',
                'barang_nama' => 'Bear Brand',
                'harga_beli' => 10700,
                'harga_jual' => 11300,
            ],
            [
                'barang_id'=> 3,
                'kategori_id' => 3,
                'barang_kode' => 'B03',
                'barang_nama' => 'Lux Botanicals Sabun Cair',
                'harga_beli' => 59000,
                'harga_jual' => 60000,
            ],
            [
                'barang_id'=> 4,
                'kategori_id' => 4,
                'barang_kode' => 'B04',
                'barang_nama' => 'Kartu Uno No Mercy',
                'harga_beli' => 143000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id'=> 5,
                'kategori_id' => 5,
                'barang_kode' => 'B05',
                'barang_nama' => 'Antangin',
                'harga_beli' => 17000,
                'harga_jual' => 18000,
            ],
            [
                'barang_id'=> 6,
                'kategori_id' => 1,
                'barang_kode' => 'B06',
                'barang_nama' => 'Indomie Goreng',
                'harga_beli' => 2700,
                'harga_jual' => 3100,
            ],
            [
                'barang_id'=> 7,
                'kategori_id' => 2,
                'barang_kode' => 'B07',
                'barang_nama' => 'Hydro Coco',
                'harga_beli' => 26000,
                'harga_jual' => 27000,
            ],
            [
                'barang_id'=> 8,
                'kategori_id' => 3,
                'barang_kode' => 'B08',
                'barang_nama' => 'Scarlett Body Lotion',
                'harga_beli' => 75000,
                'harga_jual' => 78000,
            ],
            [
                'barang_id'=> 9,
                'kategori_id' => 4,
                'barang_kode' => 'B09',
                'barang_nama' => 'Jas Hujan Plastik',
                'harga_beli' => 15300,
                'harga_jual' => 16300,
            ],
            [
                'barang_id'=> 10,
                'kategori_id' => 5,
                'barang_kode' => 'B10',
                'barang_nama' => 'Conterpain',
                'harga_beli' => 51000,
                'harga_jual' => 52000,
            ],
            [
                'barang_id'=> 11,
                'kategori_id' => 1,
                'barang_kode' => 'B11',
                'barang_nama' => 'Silverqueen Chunky Bar',
                'harga_beli' => 25500,
                'harga_jual' => 26500,
            ],
            [
                'barang_id'=> 12,
                'kategori_id' => 2,
                'barang_kode' => 'B12',
                'barang_nama' => 'Milo Susu Bubuk',
                'harga_beli' => 97000,
                'harga_jual' => 99000,
            ],
            [
                'barang_id'=> 13,
                'kategori_id' => 3,
                'barang_kode' => 'B13',
                'barang_nama' => 'Head & Shoulders Shampoo',
                'harga_beli' => 40500,
                'harga_jual' => 41500,
            ],
            [
                'barang_id'=> 14,
                'kategori_id' => 4,
                'barang_kode' => 'B14',
                'barang_nama' => 'KIT Pembersih Motor',
                'harga_beli' => 16500,
                'harga_jual' => 17500,
            ],
            [
                'barang_id'=> 15,
                'kategori_id' => 5,
                'barang_kode' => 'B15',
                'barang_nama' => 'Vitacimin Vitamin C',
                'harga_beli' => 2300,
                'harga_jual' => 2600,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
