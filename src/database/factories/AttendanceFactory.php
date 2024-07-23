<?php

namespace Database\Factories;

use App\Models\Attendance;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'user_id' => $this->faker->numberBetween(1,7),
            'work_start_time' =>$this->faker->dateTimeBetween('-1 week')
        ];
    }
}
