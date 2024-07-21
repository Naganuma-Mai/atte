<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 2,
            'work_start_time' => '2024-07-21 07:00:00',
            'created_at' => '2024-07-21 07:00:00',
            'updated_at' => '2024-07-21 07:00:00'
        ];
        DB::table('attendances')->insert($param);
    }
}
