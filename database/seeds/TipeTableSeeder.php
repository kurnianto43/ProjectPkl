<?php

use Illuminate\Database\Seeder;
use App\Tipe;

class TipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipe::create([
            'nama_tipe' => 'M041',
            'keterangan_tipe' => 'Frigorex Fv-280',
        ]);

        Tipe::create([
            'nama_tipe' => 'M043',
            'keterangan_tipe' => 'Frigorex Fv-280 Isotonic Edition',
        ]);

        Tipe::create([
            'nama_tipe' => 'M056',
            'keterangan_tipe' => 'Sanden CCC-300 Rix',
        ]);

        Tipe::create([
            'nama_tipe' => 'M057',
            'keterangan_tipe' => 'Sanden SCC-300 Rax',
        ]);

        Tipe::create([
            'nama_tipe' => 'M650',
            'keterangan_tipe' => 'Frigorex Fv-650 Single Door Large',
        ]);
    }
}
