<?php

namespace Database\Seeders;

use App\Models\Budget;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Glen',
            'email' => 'glena072@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()

        ]);
        \App\Models\User::factory(5)->create();
        \App\Models\Category::factory()->create([
            'name' => 'housing',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Insurance',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Food',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Utilities',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Savings',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Transportation',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Personal',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Entertainment',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Donations',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        \App\Models\Biller::factory(10)->create();
        \App\Models\Budget::factory(50)->create();
        \App\Models\Transaction::factory(500)->create();

    }
}
