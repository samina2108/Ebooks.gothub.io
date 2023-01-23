@extends('Admin/Admindashboard')
@section('Adminfetch')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin_assets/bootstrap.css/bootstrap.css" rel="stylesheet" media="all">
    <link href="bootstrap.css/bootstrap.css" rel="stylesheet" media="al">
    <link href="admin_assets/css/theme.css" rel="stylesheet" media="all">
    <title>Admin fetch</title>
</head>

<body class="mt-5">
  

<div class="container mt-5 ">
  <h2>view Products</h2>
  <p>books Upload view:</p>            
  <table class="table table-hover table-responsive table-bordered mt-5"  >
    <thead class="table-dark">
      <tr>
        <th>Name</th>
        <th>Prize</th>
        <th>image</th>
        <th>Delete</th>
       
      </tr>
    </thead>
    <tbody>
             @foreach($p as $pp)
      <tr>
        <td>{{$pp->name}}</td>
        <td>{{$pp->prize}}</td>
        <td><img width="50px" height="50px"  src="/uploads/addproducts/{{$pp->image}}"></td>
        <td> <button class="btn btn-sm btn-danger"><a href="delete5/{{$pp->id}}">Delete</a></button></td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
  
</div>

</body>
</html>
@endsection

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
  max-width: 500px;
  padding-right: 10px;
  padding-left:  10px;
  
}
button a{
  text-decoration: none !important;
    outline: none !important;
    color:black;
   
}
</style>

