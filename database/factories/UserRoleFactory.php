<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserRole;
class UserRoleFactory extends Factory
{
    protected $model = UserRole::class;

    public function definition()
    {
        return [
            'fk_users_id' => 1,
            'fk_roles_id' => $this->faker->randomElement([1, 2, 3]), // IDs dos papéis desejados: 1, 2, 3
        ];
    }
}
