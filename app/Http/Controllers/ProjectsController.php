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

    public function show(Project $project){
        
       return view('projects.show', compact('project'));
    }

    public function edit(Project $project){
        // return Project $project;

       
       return view('projects.edit', compact('project'));
    }

    public function store(){

        Project::create(request()->validate([
             'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3','max:255']

        ]));
        // dd(request(['title','decription']));

        // $project = new Project();
        // $project->title = request('title');
        // $project->description = request('description');

        //  $project->save();//insert

       return redirect('/projects');
    }

     public function update(Project $project){
        /*dd('die!')*/
        $project->update(request(['title', 'description']));
       
       // $project->title = request('title');
       // $project->description = request('description');

       //  $project->save();

       return redirect('/projects');
    }

    public function destroy(Project $project){

     $project->delete();
       return redirect('/projects');
    }
    
}
