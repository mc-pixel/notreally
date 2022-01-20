<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Beer;
use App\Models\Bar;
use App\Models\Country;

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
