<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ship;

class ShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ship = [
            'name' => 'No Ship',
            'speed' => 0,
            'description' => "There's nothing to see here.",
        ];

        Ship::create($ship);
    }
}
