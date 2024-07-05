<!DOCTYPE html>
<html>
<head>
    <title>Submitted Queries</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Submitted Queries</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Response</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($queries as $query)
                    <tr>
                        <td>{{ $query->id }}</td>
                        <td>{{ $query->name }}</td>
                        <td>{{ $query->email }}</td>
                        <td>{{ $query->message }}</td>
                        <td>{{ $query->response }}</td>
                        <td>{{ $query->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>