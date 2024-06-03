<?php

namespace App\Http\Controllers;

use App\Models\JobHistory;
use App\Models\Employee;
use App\Models\Job;
use App\Models\Department;
use Illuminate\Http\Request;

class JobHistoryController extends Controller
{
    public function index()
    {
        $jobHistories = JobHistory::all();
        return view('job_history.index', compact('jobHistories'));
    }

    public function create()
    {
        $employees = Employee::all();
        $jobs = Job::all();
        $departments = Department::all();

        return view('job_history.create', compact('employees', 'jobs', 'departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'job_id' => 'required|string|max:10',
            'department_id' => 'required|integer',
        ]);

        JobHistory::create($request->all());

        return redirect()->route('job_history.index')->with('success', 'Job History created successfully.');
    }

    public function show($employee_id, $start_date, $end_date)
    {
        $jobHistory = JobHistory::where('employee_id', $employee_id)
                                ->where('start_date', $start_date)
                                ->where('end_date', $end_date)
                                ->firstOrFail();

        return view('job_history.show', compact('jobHistory'));
    }

    public function edit($employee_id, $start_date, $end_date)
    {
        $jobHistory = JobHistory::where('employee_id', $employee_id)
                                ->where('start_date', $start_date)
                                ->where('end_date', $end_date)
                                ->firstOrFail();

        return view('job_history.edit', compact('jobHistory'));
    }

    public function update(Request $request, $employee_id, $start_date, $end_date)
    {
        $request->validate([
            'employee_id' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'job_id' => 'required|string|max:10',
            'department_id' => 'required|integer',
        ]);

        $jobHistory = JobHistory::where('employee_id', $employee_id)
                                ->where('start_date', $start_date)
                                ->where('end_date', $end_date)
                                ->firstOrFail();

        $jobHistory->update($request->all());

        return redirect()->route('job_history.index')->with('success', 'Job History updated successfully.');
    }

    public function destroy($employee_id, $start_date, $end_date)
    {
        $jobHistory = JobHistory::where('employee_id', $employee_id)
                                ->where('start_date', $start_date)
                                ->where('end_date', $end_date)
                                ->firstOrFail();

        $jobHistory->delete();

        return redirect()->route('job_history.index')->with('success', 'Job History deleted successfully.');
    }
}
