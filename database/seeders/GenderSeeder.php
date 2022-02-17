<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender = [
            'Male',
            'Female',
            'Prefer Not to Say'
        ];
        foreach($gender as $g){
            DB::table('gender')->insert([
                'title' => $g
            ]);
        }
    }
}
