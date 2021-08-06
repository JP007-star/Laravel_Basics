<x-header data="about header" />
<?php echo "Hi"; ?><br>
@include('inner')
@include('header')


<!-- @if($names=="Jp")
<a href="/">Welcome</a>
@endif  -->


@for($i=1;$i<=10;$i++)
<h2>{{$i}}<h2>
@endfor
 

@foreach($names as $name)
<h3>{{$name}}</h3>
@endforeach
@csrf
<script>
    var data=@json($names);
    console.log(data);
</script>