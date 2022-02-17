<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectModel;

class MyProjectsController extends Controller
{
    public function uploadProjects(){
    	$projectModels = new ProjectModel();
    	return view('my-projects-page', ['data' => $projectModels->all()]);
    }

    public function showProject($id){
    	return view('one-project-page', ['data' => ProjectModel::find($id)]);
    }


    public function dark_uploadProjects(){
    	$projectModels = new ProjectModel();
    	return view('dark_my-projects-page', ['data' => $projectModels->all()]);
    }

    public function dark_showProject($id){
    	return view('dark_one-project-page', ['data' => ProjectModel::find($id)]);
    }
}
