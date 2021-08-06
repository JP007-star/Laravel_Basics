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
<title>Upload Image</title>
</head>
<body>
   <form action="/uploadform" enctype="multipart/form-data" method="post">
       @csrf
        <div class="form-group">
            <h1>Upload Image</h1>
     <label for=""></label>
     <input type="file" class="form-control-file" name="file" id="" placeholder="" aria-describedby="fileHelpId">
     <small id="fileHelpId" class="form-text text-muted"></small>
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
   </form>
  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>