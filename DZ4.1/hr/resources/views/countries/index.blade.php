<!-- resources/views/countries/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Countries</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <h1>Countries</h1>
    <a href="{{ route('countries.create') }}" style="background-color: #28a745; color: #fff; padding: 5px 10px; text-decoration: none; border-radius: 5px;">Create New Country</a>
    <table>
        <tr>
            <th>Country ID</th>
            <th>Country Name</th>
            <th>Region</th>
            <th>Actions</th>
        </tr>
        @foreach ($countries as $country)
        <tr>
            <td>{{ $country->country_id }}</td>
            <td>{{ $country->country_name }}</td>
            <td>{{ $country->region->region_name }}</td>
            <td>
                <a href="{{ route('countries.edit', $country->country_id) }}" style="color: #007bff; text-decoration: none; margin-right: 5px;">Edit</a>
                <form action="{{ route('countries.destroy', $country->country_id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background-color: #dc3545; color: #fff; border: none; padding: 5px 10px; cursor: pointer;">Delete</button>
                </form>
            </td>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
