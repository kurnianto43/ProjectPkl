<?php

use Illuminate\Database\Seeder;
use App\Tagihan;

class TagihanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tagihan::create([
            'nomor_dokumen' => 'A00001919191',
            'periode_tagihan' => 'Februari',
        ]);

        Tagihan::create([
            'nomor_dokumen' => 'A00001919191',
            'periode_tagihan' => 'Maret',
        ]);

        Tagihan::create([
            'nomor_dokumen' => 'A00001919191',
            'periode_tagihan' => 'April',
        ]);

        Tagihan::create([
            'nomor_dokumen' => 'A00001919191',
            'periode_tagihan' => 'Mei',
        ]);
    }
}
