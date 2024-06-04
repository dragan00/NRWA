
<div class="container">
    <h1>Job History Details</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Employee ID:</strong> {{ $jobHistory->employee_id }}</p>
            <p><strong>Start Date:</strong> {{ $jobHistory->start_date }}</p>
            <p><strong>End Date:</strong> {{ $jobHistory->end_date }}</p>
            <p><strong>Job ID:</strong> {{ $jobHistory->job_id }}</p>
            <p><strong>Department ID:</strong> {{ $jobHistory->department_id }}</p>
        </div>
    </div>
    <a href="{{ route('job_history.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
