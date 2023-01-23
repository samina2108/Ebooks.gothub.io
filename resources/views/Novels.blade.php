@extends('master')
@section('Novels')

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
      <title>NOVEL BOOK</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
	 
	  <link rel="stylesheet" href="/bootstrap.css/bootstrap.css" >
     
      
   </head>
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bree+Serif&family=EB+Garamond:ital,wght@0,500;1,800&display=swap');


body {
/* background: #DFC2F2; */
	background-image: linear-gradient( to right, #ffffb3,#ffe6e6);
	background-attachment: fixed;	
	background-size: cover;
	width: 100%;
	height: 100%;
  /* background-image:linear-gradient( to right, #87adfe,#ff77cd); */
	}

	@media only screen and (max-width: 600px) {
		body {
		width: 100%;
		height: 100px;
  }}
  


#container{
	box-shadow: 0 15px 30px 1px grey;
	background: rgba(255, 255, 255, 0.90);
	text-align: center;
	border-radius: 5px;
	overflow: hidden;
	margin: 5em auto;
	height: 350px;
	width: 70%;
  
	
}
@media only screen and (max-width: 600px) {
	#container {
		width: 100%;
		height: 350px;
		text-align: center;
		
  }

}


.product-details {
	position: relative;
	text-align: left;
	overflow: hidden;
	padding: 30px;
	height: 100%;
	float: left;
	width: 40%;

}
@media only screen and (max-width: 600px) {
	.product-details  {
		
		text-align: left;
	overflow: hidden;
		padding: 10px;
		position: relative;
		font-size: 10px;
		width: 40%;
  }

}



#container .product-details h1{
	font-family: 'Bebas Neue', cursive;
	display: inline-block;
	position: relative;
	font-size: 30px;
	color: #344055;
	margin: 0;
	
}
@media only screen and (max-width: 600px) {
	#container .product-details h1 {
		font-size: 20px;
}
}
#container .product-details h1:before{
	position: absolute;
	content: '';
	right: 0%; 
	top: 0%;
	transform: translate(25px, -15px);
	font-family: 'Bree Serif', serif;
	display: inline-block;
	background: #ffe6e6;
	border-radius: 5px;
	font-size: 14px;
	/* padding: 5px; */
	color: white;
	margin: 0;
	animation: chan-sh 6s ease infinite;
	width: 100%;
}
@media only screen and (max-width: 600px) {
	#container .product-details h1:before {
		font-size: 12px;
		width: 100%;
}
}
.hint-star {
	display: inline-block;
	margin-left: 0.5em;
	color: gold;
	width: 100%;
}
@media only screen and (max-width: 600px) {
	.hint-star  {
		font-size: 10px;
		width: 100%;
}
}
#container .product-details > p {
font-family: 'EB Garamond', serif;
	text-align: center;
	font-size: 18px;
	color: #7d7d7d;
	width: 100%;
}
@media only screen and (max-width: 600px) {
	#container .product-details > p {
		font-size: 14px;
		width: 100%;
  }
}
.control{
	position: absolute;
	/* bottom: 20%;
	left: 22.8%; */
	
}
/* @media only screen and (max-width: 600px) {
	.control{
		
		width: 100%;
		position: absolute;
  }
} */
.btn {

	transform: translateY(0px);
	transition: 0.3s linear;
	/* background:  #809fff; */
	border-radius: 5px;
  position: relative;
  overflow: hidden;
	cursor: pointer;
	outline: none;
	border: 1px solid #000000;
	color: #eee;
	padding: 15px;

		
	font-size: 15px;
	
}

@media only screen and (max-width: 600px) 
{
	.btn {
		padding:5px;
		
	font-size: 6px;
  }
}
  

.product-image {
	transition: all 0.3s ease-out;
	display: inline-block;
	position: relative;
	overflow: hidden;
	height: 100%;
	float: right;
	width: 45%;
	display: inline-block;

}


#container img {width: 100%;height: 100%;}


.info {
    background: rgba(27, 26, 26, 0.9);
    font-family: 'Bree Serif', serif;
    transition: all 0.3s ease-out;
    transform: translateX(-100%);
    position: absolute;
    line-height: 1.8;
  
    font-size: 105%;
    cursor: no-drop;
    color: #FFF;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
}

@media only screen and (max-width: 600px) 
{
	.info {
		width: 100%;
		font-size: 75%;
		line-height: 2.5;
		transition: all 0.3s ease-out;
    transform: translateX(-100%);
  }
} 

.info h2 {text-align: center}


.product-image:hover .info{transform: translateX(0);}

.info ul li{transition: 0.3s ease;}
.info ul li:hover{transform: translateX(50px) scale(1.3);}

.product-image:hover img {transition: all 0.3s ease-out;}
.product-image:hover img {transform: scale(1.2, 1.2);}
   </style>
   <!-- body -->
  <div class="container">
   <body class="main-layout" >
     
      <br>
   
<div id="container" >
	
	<div class="product-details mt-5">
		
	<h1>NOVEL BOOK</h1>
	<span class="hint-star star">
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star-o" aria-hidden="true"></i>
	</span>

<p class="information">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, asperiores.</p>
            <br>
<div class="control">
	
<a  class="btn btn-danger"  download href="/images/novelbook1.jpeg">Download</a>
<a  class="btn btn-danger" href="checkout">Buy Now</a>
</div>	
</div>
<div class="product-image ">
	<img src="/images/novelbook1.jpeg" alt="">
<div class="info ">
	<h2 class="mt-5"> Description</h2>
	<ul class="text-center ">
		<li><strong>AuthorName : </strong>5 Ft </li>
		<li><strong>BookTitle : </strong>Olive green</li>
		<li><strong>Price: </strong>balls and bells</li>
		
		
	</ul>
</div>
</div>
</div>
<div id="container" >
	
	<div class="product-details">
		
	<h1>NOVEL BOOK</h1>
	<span class="hint-star star">
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star-o" aria-hidden="true"></i>
	</span>

<p class="information">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, asperiores.</p>
            <br>
<div class="control">
	
<a  class="btn btn-danger"  download href="/images/novelbook2.jpeg">Download</a>
<a  class="btn btn-danger" href="checkout">Buy Now</a>
</div>	
</div>
<div class="product-image">
	<img src="/images/novelbook2.jpeg" alt="">
<div class="info">
	<h2> Description</h2>
	<ul class="text-center ">
		<li><strong>AuthorName : </strong>5 Ft </li>
		<li><strong>BookTitle : </strong>Olive green</li>
		<li><strong>Price: </strong>balls and bells</li>
		
		
	</ul>
</div>
</div>
</div>
@foreach($p as $p)
<div id="container">	
	<div class="product-details mt-5">
		
	<h1>NOVEL BOOK</h1>
	<span class="hint-star star">
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star-o" aria-hidden="true"></i>
	</span>
		
<p class="information">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, itaque?</p>
            <br>
<div class="control">
	
<a  class="btn btn-danger"  download  href="/uploads/addproducts/{{$p->image}}">Download</a>
<a  class="btn btn-danger" href="checkout">Buy Now</a>
</div>	
</div>
<div class="product-image">
	<img  src="/uploads/addproducts/{{$p->image}}" alt="">
<div class="info">
	<h2 class="mt-5"> Description</h2>
	<ul class="text-center ">
		<li><strong>AuthorName : </strong>{{$p->name}} </li>
		<li><strong>BookTitle : </strong>{{$p->category}}</li>
		<li><strong>Price: </strong>{{$p->prize}}</li>
		
		
	</ul>
</div>
</div>

</div>
@endforeach


</body>
</div>
</html>
@endsection

      