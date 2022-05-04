<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\ProjectType;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\CustomClasses\ImageProcessor;

class ProjectController extends Controller
{
    public function create()
    {
        $project_types = ProjectType::all();
        return Inertia::render('Dashboard/Projects/Create', [
            'project_types' => $project_types,
        ]);
    }
}
