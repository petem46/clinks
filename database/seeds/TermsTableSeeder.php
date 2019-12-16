<?php

use Illuminate\Database\Seeder;

class TermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::unprepared('SET IDENTITY_INSERT terms ON');
        DB::table('terms')->insert(array(
          array(
            'termname' => 'Autumn Term',
         ),
          array(
            'termname' => 'Autumn Term 1',
         ),
          array(
            'termname' => 'Autumn Term 2',
         ),
         array(
            'termname' => 'Spring Term',
          ),
         array(
            'termname' => 'Spring Term 1',
          ),
         array(
            'termname' => 'Spring Term 2',
          ),
         array(
            'termname' => 'Summer Term',
          ),
         array(
            'termname' => 'Summer Term 1',
          ),
         array(
            'termname' => 'Summer Term 2',
          ),
        ));
        // DB::unprepared('SET IDENTITY_INSERT terms OFF');
    }
}
