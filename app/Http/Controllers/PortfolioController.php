<?php

namespace App\Http\Controllers;

use App\Models\GitProjects;
use App\Models\ProgrammingLanguage;
use App\Models\Projects;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class PortfolioController extends Controller
{
    public function index()
    {
        return Inertia::render('Portfolio/Home');
    }

    public function about()
    {
        $programmingLanguages = ProgrammingLanguage::query()
            ->select('id', 'name', 'color')
            ->get();

        return Inertia::render('Portfolio/AboutMe', [
            'programmingLanguages' => $programmingLanguages,
        ]);
    }

    public function contact()
    {
        return Inertia::render('Portfolio/ContactMe', [
            'socials' => Social::all(),
        ]);
    }

    public function work($type = null)
    {

        if (is_null($type)) {
            $type = 'repositories';
        }

        if (Cache::has('github')) {
            $github = Cache::get('github');
        } else {
            $github = Http::get('https://api.github.com/users/NotDetective')->json();
            Cache::put('github', $github, 60 * 60 * 24 * 2);
        }

        $projects = Projects::query()
            ->where('status', 'published')
            ->where('show', true)
            ->select('id', 'name', 'description', 'short_description')
            ->with('tags')
            ->get();

        $repository = GitProjects::query()
            ->with('programmingLanguage')
            ->where('status', 'approved')
            ->select('id', 'programming_language_id' ,'name', 'description', 'url')
            ->get();

        return Inertia::render('Portfolio/MyWork', [
            'projects' => $projects,
            'repository' => $repository,
            'github' => $github,
            'type' => $type,
        ]);
    }
}
