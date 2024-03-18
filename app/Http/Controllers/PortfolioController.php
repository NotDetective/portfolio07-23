<?php

namespace App\Http\Controllers;

use App\Models\ProgrammingLanguage;
use App\Models\Projects;
use App\Models\Social;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PortfolioController extends Controller
{
    public function index()
    {
        return Inertia::render('Portfolio/Home');
    }

    public function about()
    {
        return Inertia::render('Portfolio/AboutMe', [
            'programmingLanguages' => ProgrammingLanguage::all(),
        ]);
    }

    public function contact()
    {
        return Inertia::render('Portfolio/ContactMe', [
            'socials' => Social::all()
        ]);
    }

    public function work()
    {
        $projects = Projects::with('programmingLanguage', 'tags')->get();

        $repository = $projects->filter(function ($project) {
            return $project->type === 'repository';
        });

        $projects = $projects->filter(function ($project) {
            return $project->type === 'project';
        });


        return Inertia::render('Portfolio/MyWork', [
            'projects' => $projects,
            'repository' => $repository,
        ]);
    }
}
