<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->insert([
            ['name' => 'Yamanote Line', 'sort_no' => 1],
            ['name' => 'Kehin Tohoku Line', 'sort_no' => 2],
            ['name' => 'Tobu Tojo Line', 'sort_no' => 3]
        ]);
    }
}
