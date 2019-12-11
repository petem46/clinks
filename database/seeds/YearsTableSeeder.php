<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::unprepared('SET IDENTITY_INSERT years ON');
       DB::table('years')->insert(array(
         array(
           'id' => 1,
           'name' => 'Year 1',
        ),
        array(
            'id' => 2,
           'name' => 'Year 2',
         ),
        array(
            'id' => 3,
           'name' => 'Year 3',
         ),
        array(
            'id' => 4,
           'name' => 'Year 4',
         ),
        array(
            'id' => 5,
           'name' => 'Year 5',
         ),
        array(
            'id' => 6,
           'name' => 'Year 6',
         ),
        array(
            'id' => 7,
           'name' => 'Year 7',
         ),
        array(
            'id' => 8,
           'name' => 'Year 8',
         ),
        array(
            'id' => 9,
           'name' => 'Year 9',
         ),
        array(
            'id' => 10,
           'name' => 'Year 10',
         ),
        array(
            'id' => 11,
           'name' => 'Year 11',
         ),
       ));
       DB::unprepared('SET IDENTITY_INSERT years OFF');
    }
}
