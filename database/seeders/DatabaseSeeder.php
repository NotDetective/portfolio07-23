<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\GitProjects;
use App\Models\ProgrammingLanguage;
use App\Models\Projects;
use App\Models\Skils;
use App\Models\Social;
use App\Models\Tag;
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

        ProgrammingLanguage::factory(10)->create();

        Projects::factory(10)->create([
            'status' => 'published',
            'show' => true,
        ])
            ->each(function ($project) {
                $project->tags()->saveMany(Tag::factory(3)->create([
                    'type' => 'project',
                ]));
            });

        Projects::factory(10)->create()
            ->each(function ($project) {
                $project->tags()->saveMany(Tag::factory(3)->create([
                    'type' => 'project',
                ]));
            });

        GitProjects::factory(10)->create([
            'status' => 'approved',
        ]);

        GitProjects::factory(10)->create();

        Social::factory(10)->create();
    }

}
