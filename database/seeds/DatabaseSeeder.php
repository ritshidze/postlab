<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ritshidze',
            'email' => 'ritshin@pol360.co.za',
            'password' => bcrypt('mypassword'),
        ]);
    }

}
