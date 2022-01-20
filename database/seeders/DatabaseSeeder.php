<?php

namespace Database\Seeders;

use App\Models\Bar;
use App\Models\Beer;
use App\Models\Country;
use App\Models\User;
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
        User::factory(10)->create();
        Beer::factory(10)->create();
        Bar::factory(10)->create();
        Country::factory(10)->create();
    }
}
