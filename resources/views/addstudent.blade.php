<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" value="{{old('name')}}" id="name" name="name" required>
            @error('name')
                {{$message}}
            @enderror
        </div>
        <div>
            <label for="email">email:</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <div>
            <label for="rollnumber">roll number:</label>
            <input type="text" id="rollnumber" name="rollnumber" required>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

</body>

</html>