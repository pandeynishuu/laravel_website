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
    <h1>New Student Form</h1>
    <div class="container">
        <div class="row">
            <form action="/student" method="post">
                @csrf
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Student Name</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="roll">Student Roll</label>
                        <input id="roll" class="form-control" type="text" name="roll">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="faculty">Faculty</label>
                        <input id="faculty" class="form-control" type="text" name="faculty">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="batch">Batch No.</label>
                        <input id="batch" class="form-control" type="text" name="batch">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="father">Fathers Name</label>
                        <input id="father" class="form-control" type="text" name="father">
                    </div>
                </div>
                <div class="col-md-12 py-3">
                    <button type="submit" class="btn bg-primary">
                        Submit
                    </button>
                  <a href="/student" class="btn bg-primary">save all record</a>
                </div>
        </div>
        </form>
    </div>
</body>

</html>
