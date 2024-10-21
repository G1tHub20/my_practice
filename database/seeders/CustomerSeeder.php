<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert(array(
            0 => 
            array (
                'name' => 'tanaka',
                'phone' => '07012345678',
                'created_at' => '2024-10-18 11:28:35', //固定の日時の場合
            ),
            1 => 
            array (
                'name' => 'yamada',
                'phone' => '08056781234',
                'created_at' => new DateTime(), //現在日時の場合
            ),
        ));
    }
}