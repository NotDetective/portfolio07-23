<?php

namespace App\Http\Controllers;

use App\Models\ProgrammingLanguage;
use Illuminate\Http\Request;

class ProgrammingLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programmingLanguages = ProgrammingLanguage::query()
            ->select('id', 'name', 'color' )
            ->get();

        return inertia('Dashboard/Skills/Index', [
            'programmingLanguages' => $programmingLanguages,
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProgrammingLanguage $programmingLanguage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgrammingLanguage $programmingLanguage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProgrammingLanguage $programmingLanguage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgrammingLanguage $programmingLanguage)
    {
        //
    }
}
