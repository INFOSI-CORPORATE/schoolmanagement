<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{



    public function definition()
    {

        return [
            'name' => 'Miguel Hamuyela',
            'email' => 'admin@infosi.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$xJsUtRZVtpqFl5ZjuNWpbuV5w0VxsR4PHphG1xkSi2j7csAsqSZae', // abc...123 ou bcrypt('abc...123')
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
