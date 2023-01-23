<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap.css/bootstrap.css">
<link rel="stylesheet" href="/admin_assets/css/ADDBOOK.css">

    <title>Edit</title>
</head>


<body>
@isset($p)

    <div class="container contact mt-5">
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="/images/bookicon.png"style="width:100%"alt="image"/>
                    <h2>Update Product</h2>
                    </div>
            </div>
            <div class="col-md-9">
            @if (Session::has('msg6'))
                            <p class="text-success">{{ Session::get('msg6') }}</p>
                        @endif  
                <form  method="post" action="{{ url('update-book/'.$p->id) }}"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="contact-form">
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="fname" >Name:</label>
                      <div class="col-sm-10">          
                        <input type="text" class="form-control" id="fname"  name="name"  value="{{$p->name}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="lname">Title:</label>
                      <div class="col-sm-10">          
                        <input  class="form-control" id="lname" type="text" name="email" value="{{$p->email}}">
                      </div>
                    </div>
                    <div class="form-group">
                    <select class="form-select" aria-label="Default select example" name="category" >
  <option selected value="" >Open this select menu</option>
  <option value="Comics">comics</option>
  <option value="General">General</option>
  <option value="Quiz Book">Quiz Books</option>
  <option value="Novels">Novels</option>
</select>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="fname" >Prise:</label>
                      <div class="col-sm-10">          
                        <input  class="form-control" id="fname"  type="text" name="prize"  value="{{$p->prize}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="fname" >Winner Name:</label>
                      <div class="col-sm-10">          
                        <input  class="form-control" id="fname" name="Winner"   type="text"  value="{{$p->Winner}}" >
                      </div>
                    </div>
                    <div class="form-group">
                    <label  class="control-label col-sm-2" for="">Upload Book:.. <img width="50px" height="50px"  src="/uploads/addproducts/{{$p->image}}"></label>
                      <div class="col-sm-10">          
                        <input class="form-control" id="fname"  type="file" name="image">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                        <a class="underlineHover" href="index"><h5>Go to the Site</h5></a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
   
    </form>
    
</body>
</html>
@endisset