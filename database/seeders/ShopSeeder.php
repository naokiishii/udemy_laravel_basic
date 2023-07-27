<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            ['name' => 'Cake', 'area_id' => 1],
            ['name' => 'Snack', 'area_id' => 2],
            ['name' => 'Baked', 'area_id' => 1],
            ['name' => 'Ice', 'area_id' => 3]
        ]);
    }
}
