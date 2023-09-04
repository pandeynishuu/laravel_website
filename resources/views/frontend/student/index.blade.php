<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1>All Student Record</h1>
    <table class="table">
        <tr>
            <th>SN</th>
            <th>Student Name</th>
            <th>Roll No</th>
            <th>Faculty</th>
            <th>Batch</th>
            <th>Fathers Name</th>
            <th>Actions</th>
        </tr>
        @foreach ($students as $index => $student)
            <tr>
                <td>{{ ++$index }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->roll }}</td>
                <td>{{ $student->faculty }}</td>
                <td>{{ $student->batch }}</td>
                <td>{{ $student->father }}</td>
                <td>
                    <a href="/student/{{$student->id}}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class=" py-3">
        <button type="submit" class="btn bg-primary">
            <a href="/" class="btn bg-primary">New student</a>
        </button>
    </div>
</body>

</html>
