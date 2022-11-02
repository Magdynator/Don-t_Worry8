<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;
use Carbon\Carbon;


class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('teams')->insert([
            'id' => "19",
            'rule_id'=>"10",
            'email' => 'magdy@dontworry.com',
            'password' => Hash::make('1234'),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),

        ]);
        DB::table('teams')->insert([
            'id' => "20",
            'rule_id'=>"1",
            'email' => 'org1@dontworry.com',
            'password' => Hash::make('1234'),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),

        ]);
        DB::table('teams')->insert([
            'id' => "1",
            'rule_id'=>"0",
            'email' => 'team1@dontworry.com',
            'password' => Hash::make('1234'),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),

        ]);
    }
}
