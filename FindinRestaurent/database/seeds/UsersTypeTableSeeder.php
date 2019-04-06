<?php

use Illuminate\Database\Seeder;

class UsersTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users_type')->insert([
            'type' => 'Admin',
        ]);
         DB::table('users_type')->insert([
            'type' => 'User',
        ]);
         DB::table('users_type')->insert([
            'type' => 'Restaurent Owner',
        ]);


    }
}
