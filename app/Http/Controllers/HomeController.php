<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectModel;

class HomeController extends Controller
{
    public function upload(){
    	$projectModels = new ProjectModel();

    	return view('home', ['data' => $projectModels->orderBy($projectModels->raw('RAND()'))->take(3)->get()]);
    }

    public function dark_upload(){
    	$projectModels = new ProjectModel();

    	return view('dark_home', ['data' => $projectModels->orderBy($projectModels->raw('RAND()'))->take(4)->get()]);
    }
}
