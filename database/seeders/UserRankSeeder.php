<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserRankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ranks = [
            [
                'rank' => 'Admin'
            ],
            [
                'rank' => 'User'
            ],
            [
                'rank' => 'Master/Captain'
            ],
            [
                'rank' => 'Chief Mate (Chief Officer)'
            ],
            [
                'rank' => 'Second Mate (Second Officer)'
            ],
            [
                'rank' => 'Third Mate (Third Officer)'
            ],
            [
                'rank' => 'Deck Cadet'
            ],
            [
                'rank' => 'Chief Engineer'
            ],
            [
                'rank' => 'Second Engineer'
            ],
            [
                'rank' => 'Third Engineer'
            ],
            [
                'rank' => 'Fourth Engineer'
            ],
            [
                'rank' => 'Third Engineer'
            ],
            [
                'rank' => 'Fourth Engineer'
            ],
            [
                'rank' => 'Engine Cadet'
            ],
            [
                'rank' => 'Electrician'
            ],
            [
                'rank' => 'Boatswain (Bosun)'
            ],
            [
                'rank' => 'Pump Man'
            ],
            [
                'rank' => 'Able-Bodied Seaman (AB)'
            ],
            [
                'rank' => 'Ordinary Seaman (OS)'
            ],
            [
                'rank' => 'Fitter'
            ],
            [
                'rank' => 'Oiler'
            ],
            [
                'rank' => 'Wiper (Motorman)'
            ],
            [
                'rank' => 'Chief Cook'
            ],
            [
                'rank' => 'Steward'
            ],
        ];

        UserRank::create();
    }
}
