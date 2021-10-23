<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ship;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserRankSeeder::class,
            ShipSeeder::class,
            UserSeeder::class,
        ]);
        Ship::factory(10)->create();
    }
}
