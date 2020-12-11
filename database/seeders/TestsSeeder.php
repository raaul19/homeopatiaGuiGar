<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            UserSeeder::class,
        ]);
    }
}
