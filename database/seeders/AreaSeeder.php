<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            ['name' => 'Tokyo', 'sort_no' => 1],
            ['name' => 'Osaka', 'sort_no' => 2],
            ['name' => 'Kyoto', 'sort_no' => 3]
        ]);
    }
}
