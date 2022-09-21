<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Members | Add Members</title>
</head>

<body>
<h1 style="text-align: center;">Add Member Forms</h1>
@if($errors)
       
        <ul class = "alert alert-warning">
             @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
        </ul>
    @endif

<form action="" method = "POST">
    @csrf
    <div class="form-group">
    <label for="title">Name</label><br>
    <input type="text" class="form-control" name = "name" placeholder="Enter name" autocomplete="off"><br>
    </div>

    <div class="form-group">
    <label for="author">Email</label><br>
    <input type="text" class="form-control" name = "email" placeholder="Enter email" autocomplete="off"><br>
    </div>

    <div class="form-group">
    <label for="isbn">Address</label><br>
    <input type="text" class="form-control" name = "address" placeholder="Enter address" autocomplete="off"><br>
    </div>

    <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
</form>
</body>