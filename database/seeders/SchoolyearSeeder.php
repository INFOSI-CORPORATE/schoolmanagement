<?php

namespace Database\Seeders;

use App\Models\Schoolyear;
use Illuminate\Database\Seeder;

class SchoolyearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schoolyear::factory()->create();
    }
}
