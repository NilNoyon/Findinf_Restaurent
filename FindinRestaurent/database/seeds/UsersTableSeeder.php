<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'noyon13nil@gmail.com',
            'password' => bcrypt('pass1234'),
            'user_type_id' => '1',
        ]);
    }
}
