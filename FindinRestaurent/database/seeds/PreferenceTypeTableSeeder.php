<?php

use Illuminate\Database\Seeder;

class PreferenceTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preference')->insert([
            'preference_type' => 'Premium',
        ]);
        DB::table('preference')->insert([
            'preference_type' => 'General',
        ]);
    }
}
