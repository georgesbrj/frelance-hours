<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Proposal;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
          User::factory()
          ->count(100)          
          ->create();
 
          Project::factory()
          ->count(10)
          ->create();

          Proposal::factory()
          ->count(10)
          ->create();

    }
}
