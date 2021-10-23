<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::factory(1)->isAdmin()->create();
        User::factory(1)->isUser()->create();
        User::factory(30)->areUsers()->create();
    }
}
