<?php

namespace Database\Seeders;

use App\Models\Senarai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SenaraiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Senarai::factory()->count(5)->create();
    }
}
