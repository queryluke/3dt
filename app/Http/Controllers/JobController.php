<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Job;
use App\Patron;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('patron')->get();
        return view('job.index', compact('jobs'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'onyen' => 'required',
            'name' => 'required'
        ]);

        $patron = Patron::find($request->onyen);

        if(empty($patron)){
            $patron = new Patron();
            $patron->onyen = $request->onyen;
            $patron->save();
        }

        $job = new Job();
        $job->name = $request->name;
        $job->patron()->associate($patron);
        $job->save();

        return redirect()->route('job.edit',['id' => $job->id]);
    }

    public function edit($id)
    {
        $job = Job::find($id);
        return view('job.edit',compact('job'));
    }

    public function show($id)
    {
        $job = Job::find($id);
        return view('job.show',compact('job'));
    }

    public function update($id, Request $request)
    {
        //dd($request);
        $job = Job::find($id);
        $job->fill($request->all());
        $job->agree_terms = $request->agree_terms ? 1 : 0;
        $job->cdr_deposit = $request->cdr_deposit ? 1 : 0;
        $job->can_share = $request->can_share ? 1: 0;
        $job->save();
        return redirect()->route('job.show',['id' => $job->id]);

    }
}
