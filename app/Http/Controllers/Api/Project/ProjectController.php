<?php

namespace App\Http\Controllers\Api\Project;

use App\Notes;
use App\Timer;
use App\Client;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\NoteCollection;
use App\Http\Resources\ProjectCollection;
use App\Http\Resources\TimesheetCollection;
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
        //dd(request()->all());
        $data = request()->validate([
            'company_id' => 'required',
            'client_id' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        $project = Project::create($data);
        $project->save();
        $project->users()->attach(request('staff'));

        return $project;
    }

    public function show(Project $project)
    {
        $clients = Client::where('id', $project->company_id)->get();

        $timesheets = Timer::where('project_id', $project->id)->get();
        $timesheetCollection = new TimesheetCollection($timesheets);

        $notes = Notes::where('project_id', $project->id)->get();
        $noteCollection = new NoteCollection($notes);
        
        $staff = $project->users;

        $collection = collect($project);
        $merged     = $collection
                        ->merge($clients,$staff)
                        ->merge($noteCollection)
                        ->merge($timesheetCollection);
        //$result   = $merged->all();
        //dd($merged);
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
