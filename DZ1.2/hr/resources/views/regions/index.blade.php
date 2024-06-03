<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regions</title>
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }
        .btn-primary {
            background-color: #007bff;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Add a button to create a new region -->
        <a href="{{ route('regions.create') }}" class="btn btn-primary">Create New Region</a>

        <!-- Display a table of regions -->
        <table>
            <tr>
                <th>Region ID</th>
                <th>Region Name</th>
                <th>Actions</th>
            </tr>
            @foreach ($regions as $region)
            <tr>
                <td>{{ $region->region_id }}</td>
                <td>{{ $region->region_name }}</td>
                <td class="actions">
                    <a href="{{ route('regions.edit', $region->region_id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('regions.destroy', $region->region_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
