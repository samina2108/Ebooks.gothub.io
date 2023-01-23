

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./bootstrap.css/bootstrap.css">
<link rel="stylesheet" href="/admin_assets/css/ADDBOOK.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Popper --> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <!-- BootStrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

   <title>Checkout</title>
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
 <!-- style css -->

   <title>checkout</title>
</head>


<body>
<div class="container">
       <div class="row ">
           <div class="col-md-3 " >
           <h1 class="mb-0 bread text-center">Checkout</h1>
               <div class="contact-info mt-5">
             
               <div class="product-image">
               <img width="100%"  src="">
<div class="info">
	<h2 class="text-center"> Description</h2>
  <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, error.</p>
	<ul>
		</strong> 
    <br>
		
		<strong> </strong>
		</ul>

</div>
</div>
  <p class="breadcrumbs text-center"><span class="mr-2"><a href="index">Home</a></span>
                   </div>
           </div>
      
           <div class="col-md-9">
           @if (Session::has('msg6'))
                           <p class="text-success">{{ Session::get('msg6') }}</p>
                       @endif  
                       <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 ftco-animate">
						<form  class="billing-form" method="post" action="/checkout1">
            @csrf
							<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">   
                    <label for="firstname">Firt Name</label>
	                  <input type="text" class="form-control" placeholder="" name="first_name" required>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" placeholder="" name="last_name" required>
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">State / Country</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select  id="" class="form-control" name="Country" required>
                      <option selected value="" >Open this select menu</option>
		                  	<option value="pakistan">Pakistan</option>
		                    <option value="UAE">UAE</option>
		                    <option value="USA">USA</option>
		                    
		               </select>
		                </div>
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Street Address</label>
	                  <input type="text" name="Address" required class="form-control" placeholder="House number and street name">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" class="form-control" placeholder="" name="City" >
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" class="form-control" placeholder="insert integer number" name="post_code"p>
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" class="form-control" placeholder="insert integer number"  name="Phone" >
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" class="form-control" placeholder="" name="Email" >
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
					<h3 class="billing-heading mb-4">Pease Choose Order Place</h3>
										<div class="radio">
										  <label class="mr-3"><input type="radio" value="hard copy" name="order_place"> Hard Copy </label>
										  <label><input type="radio"  value="CD" name="order_place"> CD</label>
										</div>
									</div>
                </div>
	            </div>
	        <div class="col-md-6">
	          		<div class="cart-detail bg-light p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Payment Method</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" value="Direct Bank Tranfer" class="mr-2" name="Payment"> Direct Bank Tranfer</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" value="Card Payment" class="mr-2" name="Payment"> Card Payment</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" value="Cash on Deleivery" class="mr-2" name="Payment"> Cash on Deleivery</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox"  class="mr-2"> I have read and accept the terms and conditions</label>
											</div>
										</div>
									</div>
									<button
                    class="btn btn-primary py-2 px-4"
                    type="submit"
                    id="sendMessageButton">Place an Order</button>
                  </form><!-- END -->
								</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
		
		

</body>
</html>

<!-- end document-->



