

    
<html>
<head>
     <meta charset="UTF-8">
     <title>login Form</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="../bootstrap.css/bootstrap.css">
</head>
<body>
   
         
          <!-- Login Form -->
          @if (Session::has('msg1'))
                            <p class="text-success">{{ Session::get('msg1') }}</p>
                        @endif
                        
          <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
      
          <!-- Icon -->

          <div class="fadeIn first">
            <img src="/assets/images/logo.png" id="icon" alt="User Icon" style="width:200px"/>
            <h5 class="text-white">Admin Login</h5>
          </div>
      
          <!-- Login Form -->
          <form action="/Adminlogin1" method="post">
                            @csrf
                           
            <input type="Email" id="login" class="fadeIn second" name="email" placeholder="Insert Email" required >
           
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
            
            <input type="submit" class="fadeIn fourth" value="Log In">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="index">Go to the Site</a>
            <br>
            <a class="underlineHover" href="Adminregister">Create Account</a>
          </div>
      
        </div>
      </div>
          </form>
      
         
      
        </div>
      </div>

</body>		
</html>
	 
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>



