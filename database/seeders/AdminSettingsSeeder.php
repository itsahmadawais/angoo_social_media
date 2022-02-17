<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "daily_points" => 10,
            "allow_comment_point" => true,
            "allow_post_point" => true
        ];
        foreach($data as $key => $value){
            DB::table('admin_setting')->insert([
                'setting_name' => $key,
                'setting_value' => $value
            ]);
        }
    }
}
