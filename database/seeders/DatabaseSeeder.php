<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
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

        $this->call([

            GenderSeeder::class,
             UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ImageSeeder::class,

             OrderSeeder::class,
             OrderDetailSeeder::class,
        ]);
    }
}
