<?php

use Illuminate\Database\Seeder;
use App\Teknisi;

class TeknisiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teknisi::create([
            'kode_teknisi' => '7210',
            'nama_teknisi' => 'Agus Muji',
            'alamat_teknisi' => 'Landasan ulin',
            'nomor_hp' => '0858121002',
        ]);
    }
}
