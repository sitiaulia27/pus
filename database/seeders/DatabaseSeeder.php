<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(DataKaryawanSeeder::class);
        $this->call(BeritaSeeder::class);
        $this->call(KomponenSeeder::class);
        $this->call(SubKomponenSeeder::class);
        $this->call(SubSubKomponenSeeder::class);
        $this->call(PertanyaanSeeder::class);
        $this->call(SubPertanyaanSeeder::class);
        $this->call(PilihanSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(LayananSeeder::class);
        $this->call(SliderSeeder::class);
    }
}
