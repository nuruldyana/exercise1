<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Members | Member List</title>
</head>
<body>
    
    <h1 style="text-align: center;">Member List</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" style="text-align: center;">ID NUMBER</th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">ADDRESS</th>
                <th scope="col">OPERATION</th>
            </tr>
        </thead>
         <tbody>
            @foreach($members as $member)
            <tr>
                <td style="text-align: center;">{{$member['id']}}</td>
                <td>{{$member['name']}}</td>
                <td>{{$member['email']}}</td>
                <td>{{$member['address']}}</td>
                <td><button class = "btn btn-danger"><a href={{"delete/".$member['id']}} class = "text-light">Delete</a></button>
                    <button class = "btn btn-primary"><a href={{"edit/".$member['id']}} class = "text-light">Edit</a></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <button class = "btn btn-primary"><a href="/create"class = "text-light">Add Member</a></button>
</body>