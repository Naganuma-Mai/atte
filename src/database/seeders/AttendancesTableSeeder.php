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
            'user_id' => 1,
            'work_start_time' => '2024-07-08 07:00:00',
            'work_end_time' => '2024-07-08 21:00:00',
            'created_at' => '2024-07-08 07:00:00',
            'updated_at' => '2024-07-08 21:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-07-09 07:00:00',
            'work_end_time' => '2024-07-09 17:00:00',
            'created_at' => '2024-07-09 07:00:00',
            'updated_at' => '2024-07-09 17:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-07-10 09:00:00',
            'work_end_time' => '2024-07-10 14:00:00',
            'created_at' => '2024-07-10 09:00:00',
            'updated_at' => '2024-07-10 14:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-07-12 07:00:00',
            'work_end_time' => '2024-07-12 17:00:00',
            'created_at' => '2024-07-12 07:00:00',
            'updated_at' => '2024-07-12 17:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-07-13 08:30:00',
            'work_end_time' => '2024-07-13 18:30:00',
            'created_at' => '2024-07-13 08:30:00',
            'updated_at' => '2024-07-13 18:30:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-07-15 08:30:00',
            'work_end_time' => '2024-07-15 18:30:00',
            'created_at' => '2024-07-15 08:30:00',
            'updated_at' => '2024-07-15 18:30:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-07-18 08:30:00',
            'work_end_time' => '2024-07-18 18:00:00',
            'created_at' => '2024-07-18 08:30:00',
            'updated_at' => '2024-07-18 18:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-07-19 07:30:00',
            'work_end_time' => '2024-07-19 19:30:00',
            'created_at' => '2024-07-19 07:30:00',
            'updated_at' => '2024-07-19 19:30:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-06-01 09:30:00',
            'work_end_time' => '2024-06-01 18:00:00',
            'created_at' => '2024-06-01 09:30:00',
            'updated_at' => '2024-06-01 18:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-06-03 09:30:00',
            'work_end_time' => '2024-06-03 18:00:00',
            'created_at' => '2024-06-03 09:30:00',
            'updated_at' => '2024-06-03 18:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-06-07 07:30:00',
            'work_end_time' => '2024-06-07 18:00:00',
            'created_at' => '2024-06-07 07:30:00',
            'updated_at' => '2024-06-07 18:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-06-09 10:30:00',
            'work_end_time' => '2024-06-09 18:00:00',
            'created_at' => '2024-06-09 10:30:00',
            'updated_at' => '2024-06-09 18:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-06-10 09:30:00',
            'work_end_time' => '2024-06-10 18:00:00',
            'created_at' => '2024-06-10 09:30:00',
            'updated_at' => '2024-06-10 18:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-06-11 09:30:00',
            'work_end_time' => '2024-06-11 18:00:00',
            'created_at' => '2024-06-11 09:30:00',
            'updated_at' => '2024-06-11 18:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-06-12 06:30:00',
            'work_end_time' => '2024-06-12 18:00:00',
            'created_at' => '2024-06-12 06:30:00',
            'updated_at' => '2024-06-12 18:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-06-13 09:30:00',
            'work_end_time' => '2024-06-13 18:00:00',
            'created_at' => '2024-06-13 09:30:00',
            'updated_at' => '2024-06-13 18:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-06-14 08:30:00',
            'work_end_time' => '2024-06-14 18:00:00',
            'created_at' => '2024-06-14 08:30:00',
            'updated_at' => '2024-06-14 18:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-06-15 09:30:00',
            'work_end_time' => '2024-06-15 18:00:00',
            'created_at' => '2024-06-15 09:30:00',
            'updated_at' => '2024-06-15 18:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-06-16 09:30:00',
            'work_end_time' => '2024-06-16 18:00:00',
            'created_at' => '2024-06-16 09:30:00',
            'updated_at' => '2024-06-16 18:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-06-17 09:30:00',
            'work_end_time' => '2024-06-17 18:00:00',
            'created_at' => '2024-06-17 09:30:00',
            'updated_at' => '2024-06-17 18:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-06-19 09:30:00',
            'work_end_time' => '2024-06-19 18:00:00',
            'created_at' => '2024-06-19 09:30:00',
            'updated_at' => '2024-06-19 18:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-06-20 09:30:00',
            'work_end_time' => '2024-06-20 16:00:00',
            'created_at' => '2024-06-20 09:30:00',
            'updated_at' => '2024-06-20 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-01 09:30:00',
            'work_end_time' => '2024-05-01 16:00:00',
            'created_at' => '2024-05-01 09:30:00',
            'updated_at' => '2024-05-01 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-02 09:30:00',
            'work_end_time' => '2024-05-02 16:00:00',
            'created_at' => '2024-05-02 09:30:00',
            'updated_at' => '2024-05-02 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-03 09:30:00',
            'work_end_time' => '2024-05-03 17:00:00',
            'created_at' => '2024-05-03 09:30:00',
            'updated_at' => '2024-05-03 17:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-05 09:00:00',
            'work_end_time' => '2024-05-05 16:00:00',
            'created_at' => '2024-05-05 09:00:00',
            'updated_at' => '2024-05-05 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-06 09:30:00',
            'work_end_time' => '2024-05-06 16:00:00',
            'created_at' => '2024-05-06 09:30:00',
            'updated_at' => '2024-05-06 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-07 09:30:00',
            'work_end_time' => '2024-05-07 16:00:00',
            'created_at' => '2024-05-07 09:30:00',
            'updated_at' => '2024-05-07 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-08 09:30:00',
            'work_end_time' => '2024-05-08 16:00:00',
            'created_at' => '2024-05-08 09:30:00',
            'updated_at' => '2024-05-08 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-09 09:30:00',
            'work_end_time' => '2024-05-09 16:00:00',
            'created_at' => '2024-05-09 09:30:00',
            'updated_at' => '2024-05-09 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-11 09:30:00',
            'work_end_time' => '2024-05-11 16:00:00',
            'created_at' => '2024-05-11 09:30:00',
            'updated_at' => '2024-05-11 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-14 09:30:00',
            'work_end_time' => '2024-05-14 16:00:00',
            'created_at' => '2024-05-14 09:30:00',
            'updated_at' => '2024-05-14 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-15 09:30:00',
            'work_end_time' => '2024-05-15 16:00:00',
            'created_at' => '2024-05-15 09:30:00',
            'updated_at' => '2024-05-15 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-16 09:30:00',
            'work_end_time' => '2024-05-16 16:00:00',
            'created_at' => '2024-05-16 09:30:00',
            'updated_at' => '2024-05-16 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-18 09:30:00',
            'work_end_time' => '2024-05-18 16:00:00',
            'created_at' => '2024-05-18 09:30:00',
            'updated_at' => '2024-05-18 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-20 09:30:00',
            'work_end_time' => '2024-05-20 16:00:00',
            'created_at' => '2024-05-20 09:30:00',
            'updated_at' => '2024-05-20 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-21 09:30:00',
            'work_end_time' => '2024-05-21 16:00:00',
            'created_at' => '2024-05-21 09:30:00',
            'updated_at' => '2024-05-21 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-22 09:30:00',
            'work_end_time' => '2024-05-22 16:00:00',
            'created_at' => '2024-05-22 09:30:00',
            'updated_at' => '2024-05-22 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-23 09:30:00',
            'work_end_time' => '2024-05-23 16:00:00',
            'created_at' => '2024-05-23 09:30:00',
            'updated_at' => '2024-05-23 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-24 09:30:00',
            'work_end_time' => '2024-05-24 16:00:00',
            'created_at' => '2024-05-24 09:30:00',
            'updated_at' => '2024-05-24 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-25 09:30:00',
            'work_end_time' => '2024-05-25 16:00:00',
            'created_at' => '2024-05-25 09:30:00',
            'updated_at' => '2024-05-25 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-26 09:30:00',
            'work_end_time' => '2024-05-26 16:00:00',
            'created_at' => '2024-05-26 09:30:00',
            'updated_at' => '2024-05-26 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-27 09:30:00',
            'work_end_time' => '2024-05-27 16:00:00',
            'created_at' => '2024-05-27 09:30:00',
            'updated_at' => '2024-05-27 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-29 09:30:00',
            'work_end_time' => '2024-05-29 16:00:00',
            'created_at' => '2024-05-29 09:30:00',
            'updated_at' => '2024-05-29 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-05-31 09:30:00',
            'work_end_time' => '2024-05-31 16:00:00',
            'created_at' => '2024-05-31 09:30:00',
            'updated_at' => '2024-05-31 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-01 09:30:00',
            'work_end_time' => '2024-04-01 16:00:00',
            'created_at' => '2024-04-01 09:30:00',
            'updated_at' => '2024-04-01 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-02 09:30:00',
            'work_end_time' => '2024-04-02 16:00:00',
            'created_at' => '2024-04-02 09:30:00',
            'updated_at' => '2024-04-02 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-03 09:30:00',
            'work_end_time' => '2024-04-03 16:00:00',
            'created_at' => '2024-04-03 09:30:00',
            'updated_at' => '2024-04-03 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-04 09:30:00',
            'work_end_time' => '2024-04-04 16:00:00',
            'created_at' => '2024-04-04 09:30:00',
            'updated_at' => '2024-04-04 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-05 09:30:00',
            'work_end_time' => '2024-04-05 16:00:00',
            'created_at' => '2024-04-05 09:30:00',
            'updated_at' => '2024-04-05 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-06 09:30:00',
            'work_end_time' => '2024-04-06 16:00:00',
            'created_at' => '2024-04-06 09:30:00',
            'updated_at' => '2024-04-06 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-07 09:30:00',
            'work_end_time' => '2024-04-07 16:00:00',
            'created_at' => '2024-04-07 09:30:00',
            'updated_at' => '2024-04-07 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-09 09:30:00',
            'work_end_time' => '2024-04-09 16:00:00',
            'created_at' => '2024-04-09 09:30:00',
            'updated_at' => '2024-04-09 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-10 09:30:00',
            'work_end_time' => '2024-04-10 16:00:00',
            'created_at' => '2024-04-10 09:30:00',
            'updated_at' => '2024-04-10 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-11 09:30:00',
            'work_end_time' => '2024-04-11 16:00:00',
            'created_at' => '2024-04-11 09:30:00',
            'updated_at' => '2024-04-11 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-12 09:30:00',
            'work_end_time' => '2024-04-12 16:00:00',
            'created_at' => '2024-04-12 09:30:00',
            'updated_at' => '2024-04-12 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-14 09:30:00',
            'work_end_time' => '2024-04-14 16:00:00',
            'created_at' => '2024-04-14 09:30:00',
            'updated_at' => '2024-04-14 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-15 09:30:00',
            'work_end_time' => '2024-04-15 16:00:00',
            'created_at' => '2024-04-15 09:30:00',
            'updated_at' => '2024-04-15 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-16 09:30:00',
            'work_end_time' => '2024-04-16 16:00:00',
            'created_at' => '2024-04-16 09:30:00',
            'updated_at' => '2024-04-16 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-17 09:30:00',
            'work_end_time' => '2024-04-17 16:00:00',
            'created_at' => '2024-04-17 09:30:00',
            'updated_at' => '2024-04-17 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-18 09:30:00',
            'work_end_time' => '2024-04-18 16:00:00',
            'created_at' => '2024-04-18 09:30:00',
            'updated_at' => '2024-04-18 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-19 09:30:00',
            'work_end_time' => '2024-04-19 16:00:00',
            'created_at' => '2024-04-19 09:30:00',
            'updated_at' => '2024-04-19 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-20 09:30:00',
            'work_end_time' => '2024-04-20 16:00:00',
            'created_at' => '2024-04-20 09:30:00',
            'updated_at' => '2024-04-20 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-21 09:30:00',
            'work_end_time' => '2024-04-21 16:00:00',
            'created_at' => '2024-04-21 09:30:00',
            'updated_at' => '2024-04-21 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-22 09:30:00',
            'work_end_time' => '2024-04-22 16:00:00',
            'created_at' => '2024-04-22 09:30:00',
            'updated_at' => '2024-04-22 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-24 09:30:00',
            'work_end_time' => '2024-04-24 16:00:00',
            'created_at' => '2024-04-24 09:30:00',
            'updated_at' => '2024-04-24 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-25 09:30:00',
            'work_end_time' => '2024-04-25 16:00:00',
            'created_at' => '2024-04-25 09:30:00',
            'updated_at' => '2024-04-25 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-26 09:30:00',
            'work_end_time' => '2024-04-26 16:00:00',
            'created_at' => '2024-04-26 09:30:00',
            'updated_at' => '2024-04-26 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-27 09:30:00',
            'work_end_time' => '2024-04-27 16:00:00',
            'created_at' => '2024-04-27 09:30:00',
            'updated_at' => '2024-04-27 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-28 09:30:00',
            'work_end_time' => '2024-04-28 16:00:00',
            'created_at' => '2024-04-28 09:30:00',
            'updated_at' => '2024-04-28 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-29 09:30:00',
            'work_end_time' => '2024-04-29 16:00:00',
            'created_at' => '2024-04-29 09:30:00',
            'updated_at' => '2024-04-29 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-04-30 09:30:00',
            'work_end_time' => '2024-04-30 16:00:00',
            'created_at' => '2024-04-30 09:30:00',
            'updated_at' => '2024-04-30 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-02 09:30:00',
            'work_end_time' => '2024-03-02 16:00:00',
            'created_at' => '2024-03-02 09:30:00',
            'updated_at' => '2024-03-02 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-03 09:30:00',
            'work_end_time' => '2024-03-03 16:00:00',
            'created_at' => '2024-03-03 09:30:00',
            'updated_at' => '2024-03-03 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-04 09:30:00',
            'work_end_time' => '2024-03-04 16:00:00',
            'created_at' => '2024-03-04 09:30:00',
            'updated_at' => '2024-03-04 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-05 09:30:00',
            'work_end_time' => '2024-03-05 16:00:00',
            'created_at' => '2024-03-05 09:30:00',
            'updated_at' => '2024-03-05 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-06 09:30:00',
            'work_end_time' => '2024-03-06 16:00:00',
            'created_at' => '2024-03-06 09:30:00',
            'updated_at' => '2024-03-06 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-07 09:30:00',
            'work_end_time' => '2024-03-07 16:00:00',
            'created_at' => '2024-03-07 09:30:00',
            'updated_at' => '2024-03-07 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-08 09:30:00',
            'work_end_time' => '2024-03-08 16:00:00',
            'created_at' => '2024-03-08 09:30:00',
            'updated_at' => '2024-03-08 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-09 09:30:00',
            'work_end_time' => '2024-03-09 16:00:00',
            'created_at' => '2024-03-09 09:30:00',
            'updated_at' => '2024-03-09 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-11 09:30:00',
            'work_end_time' => '2024-03-11 16:00:00',
            'created_at' => '2024-03-11 09:30:00',
            'updated_at' => '2024-03-11 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-12 09:30:00',
            'work_end_time' => '2024-03-12 16:00:00',
            'created_at' => '2024-03-12 09:30:00',
            'updated_at' => '2024-03-12 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-13 09:30:00',
            'work_end_time' => '2024-03-13 16:00:00',
            'created_at' => '2024-03-13 09:30:00',
            'updated_at' => '2024-03-13 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-14 09:30:00',
            'work_end_time' => '2024-03-14 16:00:00',
            'created_at' => '2024-03-14 09:30:00',
            'updated_at' => '2024-03-14 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-15 09:30:00',
            'work_end_time' => '2024-03-15 16:00:00',
            'created_at' => '2024-03-15 09:30:00',
            'updated_at' => '2024-03-15 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-16 09:30:00',
            'work_end_time' => '2024-03-16 16:00:00',
            'created_at' => '2024-03-16 09:30:00',
            'updated_at' => '2024-03-16 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-17 09:30:00',
            'work_end_time' => '2024-03-17 16:00:00',
            'created_at' => '2024-03-17 09:30:00',
            'updated_at' => '2024-03-17 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-18 09:30:00',
            'work_end_time' => '2024-03-18 16:00:00',
            'created_at' => '2024-03-18 09:30:00',
            'updated_at' => '2024-03-18 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-19 09:30:00',
            'work_end_time' => '2024-03-19 16:00:00',
            'created_at' => '2024-03-19 09:30:00',
            'updated_at' => '2024-03-19 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-20 09:30:00',
            'work_end_time' => '2024-03-20 16:00:00',
            'created_at' => '2024-03-20 09:30:00',
            'updated_at' => '2024-03-20 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-22 09:30:00',
            'work_end_time' => '2024-03-22 16:00:00',
            'created_at' => '2024-03-22 09:30:00',
            'updated_at' => '2024-03-22 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-24 09:30:00',
            'work_end_time' => '2024-03-24 16:00:00',
            'created_at' => '2024-03-24 09:30:00',
            'updated_at' => '2024-03-24 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-26 09:30:00',
            'work_end_time' => '2024-03-26 16:00:00',
            'created_at' => '2024-03-26 09:30:00',
            'updated_at' => '2024-03-26 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-27 09:30:00',
            'work_end_time' => '2024-03-27 16:00:00',
            'created_at' => '2024-03-27 09:30:00',
            'updated_at' => '2024-03-27 16:00:00'
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'user_id' => 1,
            'work_start_time' => '2024-03-29 09:30:00',
            'work_end_time' => '2024-03-29 16:00:00',
            'created_at' => '2024-03-29 09:30:00',
            'updated_at' => '2024-03-29 16:00:00'
        ];
        DB::table('attendances')->insert($param);
    }
}
