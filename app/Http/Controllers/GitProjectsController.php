<?php

namespace App\Http\Controllers;

use App\Models\GitProjects;
use App\Http\Requests\StoreGitProjectsRequest;
use App\Http\Requests\UpdateGitProjectsRequest;

class GitProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGitProjectsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GitProjects $gitProjects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GitProjects $gitProjects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGitProjectsRequest $request, GitProjects $gitProjects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GitProjects $gitProjects)
    {
        //
    }
}
