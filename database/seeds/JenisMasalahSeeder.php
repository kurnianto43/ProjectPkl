<?php

use Illuminate\Database\Seeder;
use App\JenisMasalah;

class JenisMasalahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisMasalah::create([
            'kode_masalah' => 'K0029',
            'keterangan_masalah' => 'roda rusak',
        ]);

        JenisMasalah::create([
            'kode_masalah' => 'K0039',
            'keterangan_masalah' => 'Lampu mati',
        ]);

        JenisMasalah::create([
            'kode_masalah' => 'K0049',
            'keterangan_masalah' => 'Prcd putus',
        ]);
    }
}
