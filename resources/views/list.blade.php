<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.w-5{
    height:10px;
}
</style>
<h1>Members List</h1> 

 
<table class="table table-striped table-inverse ">

    <thead class="col-12 ">
        <tr>
            <th>ID</th> 
            <th>NAME</th>
            <th>AGE</th>
            <th>CLASS</th>
            <th>ACTION</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{$data['Id']}}</td>
                <td>{{$data['Name']}}</td>
                <td>{{$data['Age']}}</td>
                <td>{{$data['Class']}}</td>
                <td>
                    <a type="button"  class="btn btn-primary edit" href="{{"edituser/".$data['Id']}}" ><i class="fas fa-edit"></i></a>
                    <a type="button"  class="btn btn-danger delete" href="{{"deleteuser/".$data['Id']}}" ><i class="fas fa-trash"></i></a>
                </td>
            </tr>
           @endforeach
        </tbody>
</table>
 
<span>{{$datas->links()}}</span>
 <td><a type="button"  class="btn btn-primary float-right" href="add" >Back</a></td>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>