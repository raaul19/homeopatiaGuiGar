<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['category' => 'Cremas']);
        DB::table('categories')->insert(['category' => 'Gel']);
        DB::table('categories')->insert(['category' => 'Gotas']);
        DB::table('categories')->insert(['category' => 'Spray']);
    }
}
