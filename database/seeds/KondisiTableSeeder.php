<?php

use Illuminate\Database\Seeder;
use App\Kondisi;

class KondisiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kondisi::create([
            'nama_kondisi' => 'Good',
            'keterangan_kondisi' => 'Kulkas baik dan siap pakai',
        ]);

        Kondisi::create([
            'nama_kondisi' => 'Preparation',
            'keterangan_kondisi' => 'Kulkas baik dan dalam pembersihan',
        ]);

        Kondisi::create([
            'nama_kondisi' => 'Repair',
            'keterangan_kondisi' => 'Kulkas rusak',
        ]);

        Kondisi::create([
            'nama_kondisi' => 'Dispoded',
            'keterangan_kondisi' => 'Kulkas rusak dan dimusnahkan',
        ]);
    }
}
