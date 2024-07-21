<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'attendance_id' => 30,
            'rest_start_time' => '2024-07-21 12:00:00',
            'rest_end_time' => '2024-07-21 12:59:59',
            'created_at' => '2024-07-21 12:00:00',
            'updated_at' => '2024-07-21 12:59:59'
        ];
        DB::table('rests')->insert($param);
    }
}
