

    
<html>
<head>
     <meta charset="UTF-8">
     <title>login Form</title>
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
            <h5 class="text-white">User Login</h5>
          </div>
       @if (Session::has('error'))
                            <p class="text-danger">{{ Session::get('error') }}</p>
                        @endif
                        @if (Session::has('success'))
                            <p class="text-success">{{ Session::get('success') }}</p>
                        @endif
          <!-- Login Form -->
          <form action="{{ route('login') }}" method="post">
                            @csrf
                            @method('post')
            <input type="Email" id="login" class="fadeIn second" name="email" placeholder="Insert Email" required >
            @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="password" required>
            @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
            <input type="submit" class="fadeIn fourth" value="Log In">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="index">Go to the Site</a>
            <br>
            <a class="underlineHover" href="register">Create Account</a>
          </div>
      
        </div>
      </div>

</body>		
</html>
	 
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>



