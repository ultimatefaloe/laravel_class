<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'new@example.com',
        // ]);

        Product::factory(10)->create();
        
        // Product::factory()->create([
        //     'name' => 'IPhone 12 Pro Max',
        //     'description' => 'This is the latest iPhone model with advanced features and improved performance.',
        //     'price' => 1099.99,
        //     'user_id' => 1,
        // ]); 
    }
}
