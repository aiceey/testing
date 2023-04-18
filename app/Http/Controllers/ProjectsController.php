<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class ProjectsController extends Controller
{

    public function index(){

        $projects = Project::all(); // select * from database
        return view('projects.index',compact('projects'));
    }

     public function create(){

       return view('projects.create');
    }

    public function show(){

       return view('projects.create');
    }

    public function edit($id){
        // return $id;

       $project =  Project::find($id);
       return view('projects.edit', compact('project'));
    }

    public function destroy(){

       return view('projects');
    }




    public function store(){

        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

         $project->save();//insert

       return redirect('/projects');
    }

    
}
