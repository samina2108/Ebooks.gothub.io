@extends('master')
@section('contact')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Contact us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <link href="img/favicon.ico" rel="icon" />
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
     
  </head>

  <body class="mt-5">
   
    

    <!-- Contact Start -->
    <div class="container-fluid pt-5 ">
      <div class="container mt-5">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Get In Touch</span>
          </p>
          <h1 class="mb-4">Contact Us For Any Query</h1>
        </div>
        @if (Session::has('msg3'))
                            <p class="text-success">{{ Session::get('msg3') }}</p>
                        @endif
        <div class="row">
          <div class="col-lg-7 mb-5">
            <div class="contact-form">
              <div id="success"></div>
              <form name="sentMessage" id="contactForm" novalidate="novalidate" method="post" action="{{URL::to('/contact1')}}">
              @csrf
                <div class="control-group">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Your Name"
                    required="required"
                    data-validation-required-message="Please enter your name"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <input
                    type="email"
                    name="email"
                    class="form-control"
                    id="email"
                    placeholder="Your Email"
                    required="required"
                    data-validation-required-message="Please enter your email"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <input
                    type="text"
                    class="form-control"
                    id="subject"
                    name="subject"
                    placeholder="Subject"
                    required="required"
                    data-validation-required-message="Please enter a subject"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <textarea
                    class="form-control"
                    rows="6"
                    id="message"
                    name="message"
                    placeholder="Message"
                    required="required"
                    data-validation-required-message="Please enter your message"
                  ></textarea>
                  <p class="help-block text-danger"></p>
                </div>
                <div>
                  <button
                    class="btn btn-primary py-2 px-4"
                    type="submit"
                    id="sendMessageButton"
                  >
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5 mb-5">
            <p>
              Labore sea amet kasd diam justo amet ut vero justo. Ipsum ut et
              kasd duo sit, ipsum sea et erat est dolore, magna ipsum et magna
              elitr. Accusam accusam lorem magna, eos et sed eirmod dolor est
              eirmod eirmod amet.
            </p>
            <div class="d-flex">
              <i
                class="fa-solid fa-location-dot d-inline-flex align-items-center justify-content-center  text-white rounded-circle"
                style="width: 45px; height: 45px;background-color: #58044a;"
              ></i>
              <div class="pl-3">
                <h5>Address</h5>
                <p>Aptech Garden, Karachi</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-envelope d-inline-flex align-items-center justify-content-center  text-white rounded-circle"
                style="width: 45px; height: 45px;background-color: #58044a;"
              ></i>
              <div class="pl-3">
                <h5>Email</h5>
                <p>samina@example.com</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center  text-white rounded-circle"
                style="width: 45px; height: 45px; background-color: #58044a;"
              ></i>
              <div class="pl-3">
                <h5>Phone</h5>
                <p>+092 345 67890</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="far fa-clock d-inline-flex align-items-center justify-content-center text-white rounded-circle"
                style="width: 45px; height: 45px;background-color: #58044a;"
              ></i>
              <div class="pl-3">
                <h5>Opening Hours</h5>
                <strong>Monday - Saturday:</strong>
                <p class="m-0">08:00 AM - 05:00 PM</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="./assets/js/jquery.min.js"></script>
      <script src="./assets/js/popper.min.js"></script>
      <script src="./assets/js/bootstrap.bundle.min.js"></script>
      <script src="./assets/js/jquery-3.0.0.min.js"></script>
      <script src="./assets/js/plugin.js"></script>
  </body>
</html>
@endsection