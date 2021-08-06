<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">

<title>Title</title>
</head>
<body>

<!-- {{$errors}} -->
@if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif
<div class="container card col-6 mt-5">
  <h1>User form </h1>
  <form class="col-12 text-center" action="GetData" method="POST">
    {{method_field('PUT')}}
    @csrf
    <div class="form-group">
  <label for="username"></label>
  <input type="text" name="username" id="username" class="form-control" placeholder="username" aria-describedby="usererrorname" <?php echo "value=".$datas['Name']."";?>>
  <small id="usererrorname" class="text-muted">@error('username'){{$message}}@enderror</small>
  </div>
 <div class="form-group">
  <label for=""></label>
  <input type="password" name="userpassword" id="userpassword" class="form-control" placeholder="userpassword" aria-describedby="usererror">
  <small id="usererror" class="text-muted">@error('userpassword'){{$message}}@enderror</small>
 </div>
 
  <br><br>
     <button type="submit" class=" btn btn-primary">Submit</button>
</form>

</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script>
 
</script>
</body>
</html>
