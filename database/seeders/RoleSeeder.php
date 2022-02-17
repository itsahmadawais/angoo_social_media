<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'superadmin',
            'admin',
            'user'
        ];
        foreach($roles as $role){
            DB::table('role')->insert([
                'title' => $role
            ]);
        }
    }
}
