<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SchoolsTableSeeder::class);
        $this->call(YearsTableSeeder::class);
        $this->call(KeystagesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(TermsTableSeeder::class);
    }
}
