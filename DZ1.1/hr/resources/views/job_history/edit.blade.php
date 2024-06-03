
<div class="container">
    <h1>Edit Job History</h1>

    <form action="{{ route('job_history.update', [$jobHistory->employee_id, $jobHistory->start_date, $jobHistory->end_date]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="employee_id">Employee ID</label>
            <input type="number" name="employee_id" id="employee_id" class="form-control" value="{{ $jobHistory->employee_id }}" required>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $jobHistory->start_date }}" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" id="end_date" class="form-control" value="{{ $jobHistory->end_date }}" required>
        </div>
        <div class="form-group">
            <label for="job_id">Job ID</label>
            <input type="text" name="job_id" id="job_id" class="form-control" value="{{ $jobHistory->job_id }}" maxlength="10" required>
        </div>
        <div class="form-group">
            <label for="department_id">Department ID</label>
            <input type="number" name="department_id" id="department_id" class="form-control" value="{{ $jobHistory->department_id }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
