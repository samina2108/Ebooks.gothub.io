@extends('auth/userdashboard')




 @section('main')
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css/bootstrap.css">
<link rel="stylesheet" href="/admin_assets/css/ADDBOOK.css">

    <title>Addproduct</title>
</head>


<body>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css/bootstrap.css">
<link rel="stylesheet" href="/admin_assets/css/ADDBOOK.css">

    <title>Addproduct</title>
</head>


<body>


    <div class="container  ">
        <div class="row ">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="/images/bookicon.png" alt="image"/>
                    <h2>PUBLISH BOOK</h2>
                    </div>
            </div>
            <div class="col-md-9">
            @if (Session::has('msg'))
                            <p class="text-success">{{ Session::get('msg') }}</p>
                        @endif  
                <form   method="post" action="{{URL::to('/insertbook')}}" enctype="multipart/form-data">
                @csrf
                <div class="contact-form">
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="fname" >Name:</label>
                      <div class="col-sm-10">          
                        <input type="text" class="form-control" id="fname"  name="name" placeholder="name" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="lname">Title:</label>
                      <div class="col-sm-10">          
                        <input type="text" class="form-control" id="lname" name="email" placeholder="Title" required>
                      </div>

                    </div>
                    <div class="form-group">
                    <select class="custom-select custom-select-sm form-group " name="select">
  <option selected>Open this select menu</option>
  <option value="Story book">Quizbook</option>
  <option value="General">General</option>
  <option value="Comics">Comics</option>
  <option value="Novels">Novels</option>
</select>
</div>
<div class="form-group">
                      <label class="control-label col-sm-2" for="lname">Prize:</label>
                      <div class="col-sm-10">          
                        <input type="text" class="form-control" id="lname" name="prize" placeholder="insert prize" required>
                      </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Upload Book:</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file"  name="image" placeholder="Uploadbook" required>
                      </div>
                    </div>
                    <br>
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>

<!-- end document-->
@endsection