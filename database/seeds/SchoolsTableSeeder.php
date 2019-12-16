<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::unprepared('SET IDENTITY_INSERT schools ON');
       DB::table('schools')->insert(array(
         array(
           'id' => 1,
           'name' => 'Armfield',
        ),
        array(
            'id' => 2,
           'name' => 'Aspire',
         ),
        array(
            'id' => 3,
           'name' => 'Garstang',
         ),
        array(
            'id' => 4,
           'name' => 'Montgomery',
         ),
        array(
            'id' => 5,
           'name' => 'Unity',
         ),
        array(
            'id' => 6,
           'name' => 'Gateway',
         ),
        array(
            'id' => 7,
           'name' => 'Hambleton',
         ),
        array(
            'id' => 8,
           'name' => 'Mereside',
         ),
        array(
            'id' => 9,
           'name' => 'Westcliff',
         ),
        array(
            'id' => 10,
           'name' => 'Westminster',
         ),
       ));
       DB::unprepared('SET IDENTITY_INSERT schools OFF');

    }
}
