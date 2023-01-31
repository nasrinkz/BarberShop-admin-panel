<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'userId' => 2,
            'reserveCode' => Str::random(10),
            'time' => '10-10:30',
            'date' => $this->faker->date,
            'barberId'=> 2,
            'prepayment'=> 20,
            'status'=>2
        ];

    }
}
