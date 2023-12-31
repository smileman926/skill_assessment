<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create();

        \App\Models\BlogCategory::factory()->create([
                'category' => 'Software',
                'description' => 'Software topic',
            ]
        );

        
        \App\Models\BlogCategory::factory()->create([
            'category' => 'Hardware',
            'description' => 'Hardware topic',
        ]);
    

        \App\Models\Blog::factory(100)->create();


    }
}
