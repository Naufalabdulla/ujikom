<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\SuratPeringatan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // User::factory(10)->create();

        Siswa::factory(10)->create();

        SuratPeringatan::create([
            'type' => 1
        ]);
        
        SuratPeringatan::create([
            'type' => 2
        ]);

        SuratPeringatan::create([
            'type' => 3
        ]);
    }
}
