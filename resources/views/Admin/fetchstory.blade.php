@extends('Admin/Admindashboard')




@section('userstoryfetch')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin_assets/bootstrap.css/bootstrap.css" rel="stylesheet" media="all">
    <link href="bootstrap.css/bootstrap.css" rel="stylesheet" media="al">
    <link href="admin_assets/css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>viewproduct</title>
</head>

<body class="mt-7">
  
<div class="container mt-5 ">
  <br><br><br>
  <h2>View Publish Story Data</h2>
  @if (Session::has('addmsg1'))
                            <p class="text-success">{{ Session::get('addmsg1') }}</p>
                        @endif           
                        <table class="table table-hover table-responsive table-borderless  mt-5" >
    <thead class="table-dark">
      <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Story</th>
        <th>Winner Name</th>
         <th>Delete</th>
         <th>Edit</th>
        </tr>
    </thead>
    <tbody>
      @foreach($p as $product)
      <tr>
        
        <td>{{$product->name}}</td>
   
        <td>{{$product->category}}</td>
        
        <td>{{$product->text}}</td>
        <td>{{$product->Winner}}</td>
        <td> <button class="btn btn-sm btn-danger"><a href="delete6/{{$product->id}}">Delete</a></button></td>
        <td> <button class="btn btn-sm btn-info"><a href="edit2/{{$product->id}}">Edit</a></button></td>
        
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

