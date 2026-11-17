<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::factory()->admin()->create([
            'name' => 'Admin User',
            'email' => 'admin@bookstore.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'Customer User',
            'email' => 'customer@bookstore.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $this->call(CatalogSeeder::class);
    }
}
