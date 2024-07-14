<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('student.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="phone" class="form-control" id="phone" name="phone" value="{{ $student->phone }}">
        </div>
        <div class="form-group">
            <label for="rollnumber">rollnumber</label>
            <input type="rollnumber" class="form-control" id="rollnumber" name="rollnumber"
                value="{{ $student->rollnumber }}">
        </div>
        <!-- Add more fields as needed -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</body>

</html>