<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Job;

class JobController extends Controller
{
    public function index()
    {
        return view('job.index');
    }

    public function create()
    {
        return view('job.create',compact('job'));
    }

    public function edit()
    {
        return view('job.edit');
    }
}
