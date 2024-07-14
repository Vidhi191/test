
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       
    </head>
    <body>

   
    <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>rollnumber</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->rollnumber }}</td>
                            <td>
                            <a href="{{ route('student.create') }}" class="btn btn-primary mb-3">Add Student</a>
                                <a href="{{ route('student.show', $student->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </body>
</html>
