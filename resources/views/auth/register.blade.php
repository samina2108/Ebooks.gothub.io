

    <html>
<head>
     <meta charset="UTF-8">
     <title>Registration Form</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="../bootstrap.css/bootstrap.css">
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
      
          <!-- Icon -->
          <div class="fadeIn first">
          <img src="/assets/images/logo.png" id="icon" alt="User Icon" style="width:200px"/>
            <h5 class="text-white">User Register</h5>
          </div>
          @if (Session::has('error'))
                            <p class="text-danger">{{ Session::get('error') }}</p>
                        @endif
          <!-- Login Form -->
          <form action="{{ route('register') }}" method="post">
                            @csrf
                            @method('post')
                            
            <input  type="text" id="login" class="fadeIn second" name="name" placeholder="username ">
            @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
            <input type="Email" id="password" class="fadeIn third " name="email" placeholder="Email ">
            @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
            @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
            <input type="password" id="password" class="fadeIn third" name="password_confirmation" placeholder="Confirm password">
            @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
            <input type="submit" class="fadeIn fourth" value="Sign up">

          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="index">Go to the Site</a>
            <br>
            <a class="underlineHover" href="login">Already have an Account please login</a>
          </div>
      
        </div>
      </div>

</body>		
</html>
	 
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>



