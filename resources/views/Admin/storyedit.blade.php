<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap.css/bootstrap.css">
<link rel="stylesheet" href="/admin_assets/css/ADDBOOK.css">

    <title>Edit story</title>
</head>


<body>
@isset($p)

    <div class="container contact mt-5">
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="/images/bookicon.png"style="width:100%"alt="image"/>
                    <h2>Update Story data</h2>
                    </div>
            </div>
            <div class="col-md-9">
            @if (Session::has('msg7'))
                            <p class="text-success">{{ Session::get('msg7') }}</p>
                        @endif  
                <form  method="post" action="{{ url('story-update/'.$p->id) }}">   
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
                      <label class="control-label col-sm-2" for="lname">Category:</label>
                      <div class="col-sm-10">          
                        <input  class="form-control" id="lname" type="text" name="category" value="{{$p->category}}">
                      </div>
                    </div>
                    

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="fname" >Story:</label>
                      <div class="col-sm-10">          
                        <input  class="form-control" id="fname"  type="text" name="text"  value="{{$p->text}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="fname" >Winner Name:</label>
                      <div class="col-sm-10">          
                        <input  class="form-control" id="fname" name="Winner"   type="text"  value="{{$p->Winner}}" >
                      </div>
                    </div>
                    
                    <br>
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                        <a class="underlineHover" href="Admindashboard"><h5>Go to the Dashboard</h5></a>
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