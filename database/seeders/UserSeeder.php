<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->insert([
            'first_name' => 'Awais',
            'last_name'  => 'Ahmad',
            'name'       => 'Awais Ahmad',
            'username'   => 'awaisahmad',
            'email'      => 'awaisahmad1276@gmail.com',
            'phone'      => '03086554586',
            'role_id'    => '3',
            'avatar'     => 'null',
            'password'   => Hash::make('password'),
            'gender_id'  => '1',
            'avatar'     => 'avatar.png',
        ]);
        $user = DB::table('users')->insert([
            'first_name' => 'Prolonged',
            'last_name'  => 'Worker',
            'name'       => 'Prolonged Worker',
            'username'   => 'prolongedworker',
            'email'      => 'prolongedworker@gmail.com',
            'phone'      => '0308658980',
            'role_id'    => '3',
            'avatar'     => 'null',
            'password'   => Hash::make('password'),
            'gender_id'  => '1',
            'avatar'     => 'avatar.png',
        ]);
    }
}
