<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function show(){
        $projects = 0;

        return view('projects')->with('projects', $projects);
    }
}
