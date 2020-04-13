<?php

namespace App\Http\Controllers\Api\Project;

use App\Client;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectCollection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectController extends Controller
{
    use RefreshDatabase;
    
    public function index(Request $request) {
        $projects = $request->user()->company->projects()->paginate(6);
        //dd($request->client);
        return new ProjectCollection($projects);
    }

    public function store() {
        $data = request()->validate([
            'company_id' => 'required',
            'client_id' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);
        return Project::create($data);
    }

    public function show(Project $project)
    {
        $clients = Client::where('id', $project->company_id)->get();

        $collection = collect($project);
        $merged     = $collection->merge($clients);
        //$result   = $merged->all();

        return $merged;
    }

    public function update(Project $project)
    {
        $project->update([
            'title' => request('title'),
            'description' => request('description')
        ]);
    }

    public function destroy(Project $project)
    {
        $project->delete();
    }


}
