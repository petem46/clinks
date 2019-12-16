<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared('SET IDENTITY_INSERT subjects ON');
        DB::table('subjects')->insert(array(
          array(
            'id' => 1,
            'name' => 'English',
         ),
         array(
             'id' => 2,
            'name' => 'Maths',
          ),
         array(
             'id' => 3,
            'name' => 'Science',
          ),
         array(
             'id' => 4,
            'name' => 'Geography',
          ),
         array(
             'id' => 5,
            'name' => 'History',
          ),
        ));
        DB::unprepared('SET IDENTITY_INSERT subjects OFF');
    }
}
