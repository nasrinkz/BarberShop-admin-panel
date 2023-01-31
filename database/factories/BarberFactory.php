<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BarberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'phoneNumber' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->email(),
            'startWorkTime'=> '9:30',
            'endWorkTime'=> '17:30',
            'workTimes'=>json_encode([["09:30","10:00"],["10:00","10:30"],["10:30","11:00"],["11:00","11:30"],["11:30","12:00"],["12:00","12:30"],["12:30","13:00"],["13:00","13:30"],["13:30","14:00"],["14:00","14:30"],["14:30","15:00"],["15:00","15:30"],["15:30","16:00"],["16:00","16:30"],["16:30","17:00"],["17:00","17:30"]]),
            'workDays'=>json_encode(["1","5","6"]),
            'status'=>1
        ];
    }
}
