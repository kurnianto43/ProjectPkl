<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(KategoriSukucadangSeeder::class);
        $this->call(KondisiTableSeeder::class);
        $this->call(TipeTableSeeder::class);
        $this->call(JenisMasalahSeeder::class);
        $this->call(TipePekerjaanTableSeeder::class);
        $this->call(TeknisiTableSeeder::class);
    }
}
