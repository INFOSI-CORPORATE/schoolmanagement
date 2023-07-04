<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Schoolyear;
use App\Models\Student;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Criar um usuário
        $user = User::factory()->create();

        // Criar os papéis desejados
        $adminRole = Role::factory()->create(['name' => 'admin']);
        Role::factory()->create(['name' => 'registrador']);
        Role::factory()->create(['name' => 'gerenciador']);

        // Associar os papéis ao usuário
        UserRole::factory()->create([
            'fk_users_id' => $user->id,
            'fk_roles_id' => $adminRole->id,
        ]);

        // Schoolyear::factory()->create();
        // Student::factory()->count(50)->create();
    }
}
