<?php

use Illuminate\Database\Seeder;
use App\KategoriSukucadang;

class KategoriSukucadangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriSukucadang::create([
            'nama_kategori' => 'New',
            'keterangan_kategori' => 'Suku cadang baru',
        ]);

         KategoriSukucadang::create([
            'nama_kategori' => 'New Waranty Sanden',
            'keterangan_kategori' => 'Suku cadang baru garansi sanden',
        ]);

          KategoriSukucadang::create([
            'nama_kategori' => 'Used Waranty Sanden',
            'keterangan_kategori' => 'Suku cadang bekas garansi sanden',
        ]);
    }
}
