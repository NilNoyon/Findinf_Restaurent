<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location')->insert([
            'police_station' => 'Ramna',
            'district' => 'Dhaka',
        ]);
        DB::table('location')->insert([
            'police_station' => 'Gulshan',
            'district' => 'Dhaka',
        ]);
        DB::table('location')->insert([
            'police_station' => 'Dhanmondi',
            'district' => 'Dhaka',
        ]);
        DB::table('location')->insert([
            'police_station' => 'Uttara',
            'district' => 'Dhaka',
        ]);
        DB::table('location')->insert([
            'police_station' => 'Mirpur',
            'district' => 'Dhaka',
        ]);
        DB::table('location')->insert([
            'police_station' => 'Khilgaon',
            'district' => 'Dhaka',
        ]);
        DB::table('location')->insert([
            'police_station' => 'Baridhara',
            'district' => 'Dhaka',
        ]);
    }
}
