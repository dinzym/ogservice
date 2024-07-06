<?php

namespace Database\Seeders;

use App\Models\Booster;
use Illuminate\Database\Seeder;

class BoosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Booster::factory(1)->create();
    }
}
