<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
    
        return view('jobs.index')->with('jobs', $jobs);

    }
     
    public function create()
    {
        return view('jobs.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'job_id' => 'required',
            'job_title' => 'required',
        ]);
    
        Job::create($request->all());
     
        return redirect()->route('jobs.index')
                        ->with('success','Job created successfully.');
    }
     
    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    } 
     
    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }
    
    public function update(Request $request, Job $job)
    {
    
        $job->update($request->all());
    
        return redirect()->route('jobs.index')
                        ->with('success','Job updated successfully');
    }
    
    public function destroy(Job $job)
    {
        $job->delete();
    
        return redirect()->route('jobs.index')
                        ->with('success','Job deleted successfully');
    }
}
