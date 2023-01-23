
@extends('auth/userdashboard')
@section('apply')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Contact us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />
    <link rel="stylesheet" href="../bootstrap.css/bootstrap.css">
   
   <!-- Customized Bootstrap Stylesheet -->
   <link href="admin_assets/css/style.css" rel="stylesheet" />
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />
  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <!-- Popper --> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <!-- BootStrap JS -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     
    <link href="img/favicon.ico" rel="icon" />
    <link rel="stylesheet" href="../bootstrap.css/bootstrap.css">
   
    <!-- Customized Bootstrap Stylesheet -->
    <link href="admin_assets/css/style.css" rel="stylesheet" />
  
    <!-- countdoewn link -->
    
    <script src="./js/jquery.min.js"></script>
    <script src="./jquery.simple.timer.js"></script>
  </head>

  <body class="mt-5">


@if (Session::has('msg3'))
<p class="text-success">{{ Session::get('msg3') }}</p>
@endif
<div class="container">
<div class="row">

<button id="Mybtn" class="btn btn-primary "><h4 style=color:white>Click Button to type Story </h4></button>
<div class="col-lg-10 mb-5 mt-5">
<div class="contact-form mt-5">

<form id="MyForm" method="post" name="sentMessage" id="contactForm" action="{{URL::to('/competition_post')}}">
@csrf

<div class="control-group">
<!-- <input type="text" class="form-control" name="name" placeholder="Your Name" required> -->
<input type="text"  class="form-control" name="name"  placeholder="Your Name" required >

</div>

<div class="input-group mb-3">
<div class="input-group-prepend">
<label class="input-group-text" for="inputGroupSelect01">Choose catgory</label>
</div>
<!-- <select class="custom-select" id="inputGroupSelect01" name="category" required> -->
<select class="custom-select"  id="inputGroupSelect01" name="category" required >
<option selected>Choose...</option>
<option value="Story">STORY</option>
<option value="Novel">Novels</option>
<option value="General">Generals</option>
</select>
</div>
<h1 class='timer' data-minutes-left=200></h1>
<div class="control-group">
<textarea class="form-control" rows="6" name="text" placeholder="Type story" required></textarea>

</div>
<div>
<div id="controls">
<button type="submit"
class="btn btn-primary py-2 px-4"
>Submit</button>

<script>
$('.timer').startTimer();

</script>
</div>
</div>
</form>
</div>
</div>

</div>
</div>

<!-- Contact End -->
</body>
</html>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/jquery-3.0.0.min.js"></script>
<script src="/assets/js/plugin.js"></script>
<style>
#MyForm{
display: none;
width: 300px;
border: 1px solid #ccc;
padding: 14px;
background: #ececec;
}	
</style>
<script>
$(document).ready(function(){
$('#Mybtn').click(function(){
$('#MyForm').toggle(500);
});
});
</script>
<style>

#Mybtn{


color:"white";
}	
#MyForm{
display: none;
width: 100%;
border: 1px solid #ccc;
padding: 14px;
background: #ececec;
}	
</style>

<style>
/* .time{display:table-cell;
vertical-align:middle;
font-size:30px;
text-align:center;


} */
.timer{
width:100%;
margin:auto 0;
font-size:20px;
}
.jst-hours{
float:left;

}.jst-minutes{
float:left;

}
.jst-seconds{
float:left;

}


</style>
<!-- End Author -->
<script src="./assets/js/jquery.min.js"></script>
      <script src="./assets/js/popper.min.js"></script>
      <script src="./assets/js/bootstrap.bundle.min.js"></script>
      <script src="./assets/js/jquery-3.0.0.min.js"></script>
      <script src="./assets/js/plugin.js"></script>
    
@endsection