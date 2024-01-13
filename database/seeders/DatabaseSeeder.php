<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Code;
use App\Models\Message;
use App\Models\ProgramingLanguage;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'user@app.com',
        ]);

        Message::factory(50)->create();

        Project::factory(50)->create();

        ProgramingLanguage::factory(50)->create();
    }
}
