<?php

namespace App\Http\Controllers\Api\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectCollection;

class ProjectController extends Controller
{
    public function index(Request $request) {
        $projects = $request->user()->projects()->paginate(6);

        return new ProjectCollection($projects);
    }
}
