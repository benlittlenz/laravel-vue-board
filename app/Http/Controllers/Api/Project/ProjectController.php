<?php

namespace App\Http\Controllers\Api\Project;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectCollection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectController extends Controller
{
    use RefreshDatabase;
    
    public function index(Request $request) {
        $projects = $request->user()->company->projects()->paginate(6);
        //dd($request->user());
        return new ProjectCollection($projects);
    }

    public function store() {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        return Project::create($data);
    }

    public function show(Project $project)
    {
        return $project;
    }
}
