<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            'nama_barang' => 'Pipa',
            'jumlah' => 500,
            'status' => 'available',
        ]);

        Barang::create([
            'nama_barang' => 'Batu Bata',
            'jumlah' => 15,
            'status' => 'available',
        ]);

        Barang::create([
            'nama_barang' => 'Choal',
            'jumlah' => 200,
            'status' => 'available',
        ]);

        Barang::create([
            'nama_barang' => 'Kuningan',
            'jumlah' => 10,
            'status' => 'available',
        ]);

        Barang::create([
            'nama_barang' => 'Baja',
            'jumlah' => 200,
            'status' => 'available',
        ]);

        Barang::create([
            'nama_barang' => 'Kayu',
            'jumlah' => 200,
            'status' => 'available',
        ]);

        Barang::create([
            'nama_barang' => 'Alumunium',
            'jumlah' => 0,
            'status' => 'unavailable',
        ]);

        Barang::create([
            'nama_barang' => 'Semen',
            'jumlah' => 400,
            'status' => 'available',
        ]);

        Barang::create([
            'nama_barang' => 'Beras',
            'jumlah' => 0,
            'status' => 'unavailable',
        ]);

        Barang::create([
            'nama_barang' => 'Daging',
            'jumlah' => 150,
            'status' => 'available',
        ]);

        Barang::create([
            'nama_barang' => 'Makanan Beku',
            'jumlah' => 250,
            'status' => 'available',
        ]);

        Barang::create([
            'nama_barang' => 'Minyak',
            'jumlah' => 200,
            'status' => 'available',
        ]);

        Barang::create([
            'nama_barang' => 'Kabel',
            'jumlah' => 0,
            'status' => 'unavailable',
        ]);

        Barang::create([
            'nama_barang' => 'Beras X',
            'jumlah' => 0,
            'status' => 'unavailable',
        ]);

        Barang::create([
            'nama_barang' => 'Beras 112',
            'jumlah' => 0,
            'status' => 'unavailable',
        ]);

        Barang::create([
            'nama_barang' => 'Beras XC',
            'jumlah' => 0,
            'status' => 'unavailable',
        ]);

        Barang::create([
            'nama_barang' => 'Tepung Kanji',
            'jumlah' => 0,
            'status' => 'unavailable',
        ]);

        Barang::create([
            'nama_barang' => 'Tepung Beras',
            'jumlah' => 0,
            'status' => 'unavailable',
        ]);

        Barang::create([
            'nama_barang' => 'Tepung Sagu',
            'jumlah' => 0,
            'status' => 'unavailable',
        ]);

        Barang::create([
            'nama_barang' => 'Topi Jerami',
            'jumlah' => 0,
            'status' => 'unavailable',
        ]);
    }
}
