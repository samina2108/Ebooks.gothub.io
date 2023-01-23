<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- ========================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="admin_assets/css/dashboard.css">
    <link rel="stylesheet" href="./bootstrap.css/bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />
    <!-- Fontfaces CSS-->
   <link href="admin_assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

     <!-- Main CSS-->
    <link href="admin_assets/css/theme.css" rel="stylesheet" media="all">

    

</head>

    
<body id="body-pd">
<form Action="/search">
        @csrf  
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            
          <div style=" margin: 0 auto;"><div class="input-group">
                <div class="form-outline ">
                  <input type="search"  name="query" id="form1"  class="form-control" placeholder="search here...." />
                  
                </div>
                <button  type="submit" class="btn btn-dark">
                <i class="fa-solid fa-magnifying-glass"></i>
                </button>
              </div>
            </div>
           </form>
             <!-- PAGE CONTAINER-->
      
            <!-- HEADER DESKTOP-->
        
               
                    
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                    
                                    
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        
                                        <div class="content"style="text-decoration: none; " >
                                            <a style="font-weight: 700;"class="js-acc-btn" href="#">Profile</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown" style="text-decoration: none; font-weight: 700;">
                                            <div class="info clearfix" >
                                                <div class="image "style="margin-left: 100px;border: 3px solid green "   >
                                              <img src="/images/profile.jpg" >
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href=""></a>
                                                    </h5>
                                                    <span class="email"></p></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Admin</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                    <i class="fa-sharp fa-solid fa-envelope"></i>Email</a>
                                                </div>
                                                
                                            <div class="account-dropdown__footer">
                                                <a href="logout1">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     
                   
              
        
            <!-- HEADER DESKTOP-->

        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> <a href="#" class="nav_logo"> <img src="/assets/images/logo.png" id="icon" alt="User Icon" style="width:150px"/> </a>
                    <div style="background-color: rgb(95, 5, 76) ; padding-top: 0.25rem; padding-bottom:0.20rem; border-radius: 30px 30px 0px 30px;" class="nav_list"> 
                        <a href="dashboard" class="nav_link active">
                         <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span>
                         </a> 
                         </div>
                         <a href="productadd" class="nav_link"> <i class="fa-solid fa-upload"></i> 
                            <span class="nav_name">Add Books</span> 
                        </a> <a href="viewproduct" class="nav_link"> 
                        <i class="fa-solid fa-users-gear"></i>
                                 <span class="nav_name">show user data</span> </a> 


                                 <!-- Show story data -->
                                 </a> <a href="Storyfetch" class="nav_link"> 
                        <i class="fa-solid fa-users-gear"></i>
                                 <span class="nav_name">show Story data</span> </a>
                                   <!-- show user data end -->
                                <!-- <a href="Storyfetch" class="nav_link"><i class="fa-solid fa-book"></i> -->

                          
                                
                                <!-- Home -->
                                <a href="index" class="nav_link"> <i class="fa-solid fa-house"></i>

                           </i> <span class="nav_name">Home</span> </a> </div>
                             </a> 
                             <a href="logout1" class="nav_link">
                                     <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Logout</span>
                                     </a> 
                                     </nav>
        </div>

     
        <!--Container Main start-->
    
        <div class="height-100 bg-light">
        
            <p style="font-family: Tahoma, Geneva, sans-serif;
font-size: 20px;
letter-spacing: -0.4px;
word-spacing: 2.8px;
color:  #6B1D4D;
font-weight: 700;
text-decoration: none solid rgb(68, 68, 68);
font-style: italic;
font-variant: small-caps;
text-transform: capitalize;">  </p>






 @yield('productadd')
 @yield('userfetch')
 @yield('Adminfetch')
 @yield('edit')
 @yield('dash')
 @yield('userstoryfetch')
        </div>
     
        <!--Container Main end-->
</body>
<script>
   document.addEventListener("DOMContentLoaded", function(event) {
   
   const showNavbar = (toggleId, navId, bodyId, headerId) =>{
   const toggle = document.getElementById(toggleId),
   nav = document.getElementById(navId),
   bodypd = document.getElementById(bodyId),
   headerpd = document.getElementById(headerId)
   
   // Validate that all variables exist
   if(toggle && nav && bodypd && headerpd){
   toggle.addEventListener('click', ()=>{
   // show navbar
   nav.classList.toggle('show')
   // change icon
   toggle.classList.toggle('bx-x')
   // add padding to body
   bodypd.classList.toggle('body-pd')
   // add padding to header
   headerpd.classList.toggle('body-pd')
   })
   }
   }
   
   showNavbar('header-toggle','nav-bar','body-pd','header')
   
   /*===== LINK ACTIVE =====*/
   const linkColor = document.querySelectorAll('.nav_link')
   
   function colorLink(){
   if(linkColor){
   linkColor.forEach(l=> l.classList.remove('active'))
   this.classList.add('active')
   }
   }
   linkColor.forEach(l=> l.addEventListener('click', colorLink))
   
    // Your code to run since DOM is loaded and ready
   });
   
</script>

</html>

    <!-- Jquery JS-->
    <script src="admin_assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Vendor JS       -->
    <script src="admin_assets/vendor/animsition/animsition.min.js"></script>
     <!-- Main JS-->
    <script src="admin_assets/js/main.js"></script>