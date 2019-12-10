<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KeystagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('keystages')->insert(array(
        array(
          'id' => 1,
          'name' => 'Early Years',
       ),
       array(
           'id' => 2,
          'name' => 'Key Stage 1',
        ),
       array(
           'id' => 3,
          'name' => 'Key Stage 2',
        ),
       array(
           'id' => 4,
          'name' => 'Key Stage 3',
        ),
       array(
           'id' => 5,
          'name' => 'Key Stage 4',
        ),
      ));

    }
}
