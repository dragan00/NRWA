<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return Job::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'job_id' => 'required|string|max:10|unique:jobs,job_id',
            'job_title' => 'required|string|max:35',
            'min_salary' => 'nullable|numeric|min:0',
            'max_salary' => 'nullable|numeric|min:0',
        ]);

        $job = Job::create($validated);
        return response()->json($job, 201);
    }

    public function show($id)
    {
        return Job::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($id);

        $validated = $request->validate([
            'job_title' => 'sometimes|required|string|max:35',
            'min_salary' => 'nullable|numeric|min:0',
            'max_salary' => 'nullable|numeric|min:0',
        ]);

        $job->update($validated);
        return response()->json($job);
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return response()->json(null, 204);
    }
}
