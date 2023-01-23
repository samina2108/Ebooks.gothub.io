@extends('Admin/Admindashboard')




@section('productadd')

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


    <div class="container contact mt-5">
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="/images/bookicon.png" alt="image"/>
                    <h2>Admin ADD Product</h2>
                    </div>
            </div>
            <div class="col-md-9">
            @if (Session::has('msg4'))
                            <p class="text-success">{{ Session::get('msg4') }}</p>
                        @endif  
                <form  method="post" action="{{URL::to('/Addbook')}}" enctype="multipart/form-data">
                @csrf
                <div class="contact-form">
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="fname" >Name:</label>
                      <div class="col-sm-10">          
                        <input type="text" class="form-control" id="fname" type="text" name="name" placeholder="Name" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="lname">Prise:</label>
                      <div class="col-sm-10">          
                        <input type="text" class="form-control" id="lname" type="text" name="prize" placeholder="insert prize" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Upload Book:</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" name="image" placeholder="Upload Book" required>
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
@endsection