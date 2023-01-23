<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Layouts</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="/assets/css/bootstrap.min.css" >
      <!-- style css -->
      <link rel="stylesheet" href="/assets/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="/assets/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="/assets/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="/assets/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
     
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="/assets/images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      
      <nav class="navbar navbar-expand-md navbar-dark bg-dark p-3 text-dark bg-opacity-7">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img class="logo horizontal-logo" src="/assets/images/logo.png" alt="forecastr logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mx-auto">
              <li class="nav-item ">
                <a class="nav-link active" href="index">Home</a>
              </li>
              <li class="nav-item  px-2 dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catogeries
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                  <a class="dropdown-item" href="comics">Comics</a>
                  <a class="dropdown-item " href="general">General</a>
                  <a class="dropdown-item " href="quizbook">Quiz Book</a>
                  <a class="dropdown-item" href="novel">Novels</a>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link active " href="competition">Competition</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active " href="winner">Winner</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active " href="contact">Contact Us</a>
              </li>
              <li class="nav-item ">
                 <a class="nav-link active " href="register"><img src="/assets/images/top-icon.png" alt="#" /></a>
                       </li>
              
             
            </ul>
          </div>
        </div>
      </nav>
         
         <!-- end header inner -->
      </header>
         @yield('publish')
         @yield('contact')
         @yield('competition')
         @yield('generals')
         @yield('Novels')
         @yield('quizbook')
         @yield('search')
         @yield('comic')
         @yield('winner')
         @yield('checkout')

         <!-- footer -->
   
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="Follow">
                        <h3>Follow Us</h3>
                     </div>
                     <ul class="location_icon">
                        <li> <a href="#"><img src="assets/icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="assets/icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="assets/icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="assets/icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                     <div class="Follow">
                        <h3>Newsletter</h3>
                     </div>
                     <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                     <button class="Subscribe">Subscribe</button>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="./assets/js/jquery.min.js"></script>
      <script src="./assets/js/popper.min.js"></script>
      <script src="./assets/js/bootstrap.bundle.min.js"></script>
      <script src="./assets/js/jquery-3.0.0.min.js"></script>
      <script src="./assets/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="./assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="./assets/js/custom.js"></script>
   </body>
</html>
