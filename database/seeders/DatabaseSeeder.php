<?php

namespace Database\Seeders;

use App\Models\Expense;
use App\Models\Income;
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
        User::factory(10)->create();
        Expense::factory(10)->create();
        Income::factory(10)->create();


    }
}
