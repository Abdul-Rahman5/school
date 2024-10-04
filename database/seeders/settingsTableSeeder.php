<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class settingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->delete();
        $data=[
            ['key'=>'current_session','value'=>'2021-2022'],
            ['key'=>'school_title','value'=>'MS'],
            ['key'=>'school_name','value'=>'schoole name'],
            ['key'=>'end_first_term','value'=>'1-12-2021'],
            ['key'=>'end_second_term','value'=>'1-3-2023'],
            ['key'=>'phone','value'=>'01112555'],
            ['key'=>'address','value'=>'Cairo'],
            ['key'=>'email','value'=>'abdo@gmail.com'],
            ['key'=>'logo','value'=>'1.jpg'],
        ];
        DB::table("settings")->insert($data);
    }
}
