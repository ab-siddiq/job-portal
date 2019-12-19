<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::all();
        return view('welcome',compact('jobs'));
    }
    public function show($id, Job $job){
        return view('jobs.show',compact('job'));
    }
}
