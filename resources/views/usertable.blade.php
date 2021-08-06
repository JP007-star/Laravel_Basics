<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Hello {{session('user')}}</title>

</head>
<body>
<div class="col-12">
    <h1>Hello {{session('user')}}</h1>
    <h3><a href="/logout">logout</a></h3>
<table class="table table-striped table-inverse ">
    <thead class="col-12 ">
        <tr>
            <th>ID</th> 
            <th>EMAIL</th>
            <th>FRIST NAME</th>
            <th>LAST NAME</th>
            <th>IMAGE</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($content as $data)
            <tr>
                <td>{{$data['id']}}</td>
                <td>{{$data['email']}}</td>
                <td>{{$data['first_name']}}</td>
                <td>{{$data['last_name']}}</td>
                <td><img src="{{$data['avatar']}}" class="img-fluid " alt=""></td>
            </tr>
           @endforeach
        </tbody>
</table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
