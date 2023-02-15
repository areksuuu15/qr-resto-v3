<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableNumbersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
   DB::table('table_numbers')->insert([
            ['table_number' => 1, 'is_occupied' => 0],
            ['table_number' => 2, 'is_occupied' => 0],
            ['table_number' => 3, 'is_occupied' => 0],
            ['table_number' => 4, 'is_occupied' => 0],
            ['table_number' => 5, 'is_occupied' => 0],
        ]);

    }
}
