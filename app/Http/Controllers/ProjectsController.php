<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
	
    public function index(){
    	$project = new \App\project;
    	$list=$project::all();
    	return view("pages.projects",compact('list'));
    }
}
