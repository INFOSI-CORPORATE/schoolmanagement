<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;


class StudentFactory extends Factory
{
    protected static $nProcessCounter = 1;
    protected $model = Student::class;

    public function definition()
    {
        return [
            'nProcess' => static::$nProcessCounter++,
            'nBi' => $this->faker->unique()->numberBetween(1000000, 9999999),
            'name' => $this->faker->name,
            'contact' => $this->faker->phoneNumber,
            'contactAlter' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'dateBirth' => $this->faker->date(),
            'schoolyear' => '2022-2023',
            'father' => $this->faker->name,
            'mother' => $this->faker->name,
        ];
    }
}
