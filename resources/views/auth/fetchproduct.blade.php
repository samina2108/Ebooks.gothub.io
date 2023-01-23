
@extends('auth/userdashboard')

@section('fetch')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  <link rel="stylesheet" href="/bootstrap.css/bootstrap.css" >
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>user fetch product</title>
</head>
<body > 
<div class="container mt-5" >
  <h2 >View Products</h2>
  <p>books publsih view:</p>            
  <table class="table table-hover table-responsive table-borderless  "  >
     
	  
    <thead class="table-dark">
      <tr>
        <th>Name</th>
        <th>Title</th>
        <th>Category</th>
        <th>Prize</th>
        <th>Image</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($p as $pp)
      <tr>
        <td>{{$pp->name}}</td>
        <td>{{$pp->email}}</td>
        <td>{{$pp->category}}</td>
        <td>{{$pp->prize}}</td>
        <td><img width="50px" height="50px"  src="/uploads/addproducts/{{$pp->image}}"></td>
        <td> <button class="btn btn-sm btn-danger"><a href="/delete3/{{$pp->id}}">Delete</a></button></td>
      </tr>
    
    </tbody>
  </table>
  @endforeach
  
</div>




<style>
  .table-responsive {
    min-height: .01%;
    overflow-x: auto;
}

@media screen and (max-width: 700px) {
    .table-responsive {
        width: 100%;
        margin-bottom: 15px;
        overflow-y: hidden;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        border: 1px solid #ddd;
    }
    .table-responsive > .table {
        margin-bottom: 0;
    }
    .table-responsive > .table > thead > tr > th,
    .table-responsive > .table > tbody > tr > th,
    .table-responsive > .table > tfoot > tr > th,
    .table-responsive > .table > thead > tr > td,
    .table-responsive > .table > tbody > tr > td,
    .table-responsive > .table > tfoot > tr > td {
        white-space: nowrap;
    }
}
.body { 
  margin-right: auto;
  margin-left:  auto;
  max-width: 100%;
  padding-right: 10px;
  padding-left:  10px;
  
}
button a{
  text-decoration: none !important;
    outline: none !important;
    color:black;
   
}
</style>


</body>
</html>


@endsection










  

