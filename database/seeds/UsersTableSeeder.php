<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
            //   'id' => 1,
              'name' => 'pete',
              'email' => 'petem46@gmail.com',
              'password' => bcrypt('password'),
           ),
        ));
    }
}
