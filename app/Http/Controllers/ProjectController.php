<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($id){
        $project = 0;

        return view('project')->with('project', $project);
    }
}
