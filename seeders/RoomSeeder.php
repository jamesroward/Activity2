<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'id' => '1',
                'type' => 'Private',
                'blockfloor' => '17',
                'blockcode' => '491',
            ],
            [
                'id' => '2',
                'type' => 'SemiPrivate',
                'blockfloor' => '12',
                'blockcode' => '795',
            ],
            [
                'id' => '3',
                'type' => 'Ward',
                'blockfloor' => '2',
                'blockcode' => '146',
            ]
            ]); 
    }
}