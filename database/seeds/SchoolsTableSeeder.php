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
       ));
       DB::unprepared('SET IDENTITY_INSERT schools OFF');

    }
}
