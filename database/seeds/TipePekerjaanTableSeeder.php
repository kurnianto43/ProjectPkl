<?php

use Illuminate\Database\Seeder;
use App\TipePekerjaan;
class TipePekerjaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipePekerjaan::create([
            'kode_tipe_pekerjaan' => 'CU',
            'keterangan_tipe_pekerjaan' => 'Perbaikan dengan pengisian refrigerant',
            'tarif' => 450000
        ]);

        TipePekerjaan::create([
            'kode_tipe_pekerjaan' => 'BM',
            'keterangan_tipe_pekerjaan' => 'Perbaikan dengan pengisian refrigerant dan pengecatan 2 panel',
            'tarif' => 650000
        ]);

        TipePekerjaan::create([
            'kode_tipe_pekerjaan' => 'PR',
            'keterangan_tipe_pekerjaan' => 'Perbaikan ringan',
            'tarif' => 50000
        ]);
    }
}
