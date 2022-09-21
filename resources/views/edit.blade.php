<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Members | Edit Members</title>
</head>

<body>
<h1 style="text-align: center;">Edit Member Forms</h1>
@if($errors)
        @foreach($errors->all() as $errors)
        <ul class = "alert alert-warning">
            <li>
                {{$errors}}
            </li>
        @endforeach
        </ul>
    @endif
<form action="/edit" method = "POST">
    @csrf
    <br><input type="hidden" name = "id" value = "{{$members['id']}}">
    <div class="form-group">
    <label for="title">Name</label><br>
    <input type="text" class="form-control" name = "name" value= "{{$members['name']}}"><br>
    </div>

    <div class="form-group">
    <label for="author">Email</label><br>
    <input type="text" class="form-control" name = "email" value= "{{$members['email']}}"><br>
    </div>

    <div class="form-group">
    <label for="isbn">Address</label><br>
    <input type="text" class="form-control" name = "address" value= "{{$members['address']}}"><br>
    </div>

    <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
</form>
</body>