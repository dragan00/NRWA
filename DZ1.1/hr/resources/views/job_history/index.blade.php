<!-- resources/views/job_history/index.blade.php -->

<div class="container">
    <h1>Job Histories</h1>
    <a href="{{ route('job_history.create') }}" class="btn btn-primary">Add Job History</a>
    <table class="table">
        <thead>
            <tr>
                <th>Employee</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Job</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobHistories as $jobHistory)
                <tr>
                    <td>{{ $jobHistory->employee->first_name }} {{ $jobHistory->employee->last_name }} </td>
                    <td>{{ $jobHistory->start_date }}</td>
                    <td>{{ $jobHistory->end_date }}</td>
                    <td>{{ $jobHistory->job->job_title }}</td>
                    <td>{{ $jobHistory->department->department_name }}</td>
                    <td>
                        <a href="{{ route('job_history.edit', [$jobHistory->employee_id, $jobHistory->start_date, $jobHistory->end_date]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('job_history.destroy', [$jobHistory->employee_id, $jobHistory->start_date, $jobHistory->end_date]) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
