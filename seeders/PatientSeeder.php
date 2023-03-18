<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            [
                'id' => '1',
                'fname' => 'Jose',
                'lname' => 'Manalo',
                'sex' => 'Male',
                'age' => 15,
                'address' => 'Olongapo',
                'phonenum' => 75582,
                'bdate'=> 12/1/10,
                'bplace' => 'Olongapo City',
            ],
            [
               'id' => '2',
                'fname' => 'Mary',
                'lname' => 'May',
                'sex' => 'Female',
                'age' => 89,
                'address' => 'Olongapo',
                'phonenum' => 98582,
                'bdate'=> 59/19/76,
                'bplace' => 'Olongapo City',
            ],
            [
                'id' => '3',
                'fname' => 'Luna',
                'lname' => 'Jihyo',
                'sex' => 'Female',
                'age' => 25,
                'address' => 'Olongapo',
                'phonenum' => 88582,
                'bdate'=> 01/30/90,
                'bplace' => 'Olongapo City',
            ]
            ]); 
    }
}
