<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
    	$projects= Project::all();
    	return view('projects.index',['projects'=>$projects]);
    }
    public function create()
    {
    	return view('projects.create_project');
    }
    public function store()
    {
    	/*$validated=request()->validate([
            'title'=> 'required',
            'desc'=>'required'
        ]);
        Project::create($validated); */
        $projects=new \App\Project;
    	$projects->title=request('title');
    	$projects->description=request('description');
    	$projects->save();  
    	return redirect("/"); 
    }

    /*public function show($id)
    {
        $projects=Project::find($id);
        //dd('Testing');
        return view('projects.display',['projects'=>$projects]);

    }
    public function edit(){
        return view('Projects.edit');
    }*/
}
