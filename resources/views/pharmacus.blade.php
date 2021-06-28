<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/pharma.css')}}">
</head>
<body>

  <div class="row">
    <div class="col-lg-4">
      <button type="button" class="btn btn-link"><font color="#61CE70">info:+919467829456</font></button>
      <button type="button" class="btn btn-link"><font color="#61CE70">About</font></button>
       <button type="button" class="btn btn-link"><font color="#61CE70">Delivery Information</font></button>
    </div>
    <div class="col-lg-4">
        <button type="button" class="btn btn-link"><font color="#61CE70"><b> -FREE SHIPPING FOR ORDERS OVER Rs 300-</b></font></button>
    </div>
    <div class="col-lg-4" >
         <button type="button" class="btn btn-link" style="allingment: left;"><font color="#61CE70">FAQ</font></button> 
    </div>
</div>
<hr style="margin-top:5px; margin-bottom:5px;">

<div class="row">
      <div class="col-lg-4">
         <h3><img src ="{{asset('image/p1.png')}}" style="width:60px;"><font face="verdana" color="#61CE70">PharmaServe</font></h3>
       </div>
       <div class="col-lg-4">
        <form class="form-inline my-2 my-lg-0">
           <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
         </form>
        </div>
    <div class="col-lg-2">
         <img src ="{{asset('image/p2.png')}}" style="width:60px;">
         <button class="btn btn-success my-2 my-sm-0" type="login">Login/Register</button> 
    </div> 
    <div class="col-lg-1">
        <img src ="{{asset('image/cart.png')}}" style="width:60px;">
    </div>
    <div class="col-lg-1">
        <img src ="{{asset('image/wish.png')}}" style="width:50px;">
    </div>
</div>


<div class="row" style="background-color: #61CE70;height: 7px;">
   <div class="col-lg-12">


   </div>
</div>


<div class="row" style="height: 60px;background-color: white;">
  
  <div class="col-lg-2">
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; border:#61CE70; height:60px; width:100%; border:#61CE70;">
  <a><img src ="{{asset('image/p4.png')}}"style="width:35px;"><font face="verdana" size="2px" color="#61CE70">Health & Nutrition</font></a>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:#61CE70; width:100%;">
    <a class="dropdown-item" href="#"><font color="white"></font></a>
    <a class="dropdown-item" href="#"><font color="white"></font></a>
    <a class="dropdown-item" href="#"><font color="white"></font></a>
  </div>
  </div>
  </div>

  <div class="col-lg-2">
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; border:#61CE70; height:60px; width:100%; border:#61CE70;">
  <a><img src ="{{asset('image/p5.png')}}"style="width:35px;"><font face="verdana" size="2px" color="#61CE70">Baby Care</font></a>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:#61CE70; width:100%;">
    <a class="dropdown-item" href="#"><font color="white"></font></a>
    <a class="dropdown-item" href="#"><font color="white"></font></a>
    <a class="dropdown-item" href="#"><font color="white"></font></a>
  </div>
  </div>
  </div>

  <div class="col-lg-2">
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; border:#61CE70; height:60px; width:100%; border:#61CE70;">
  <a><img src ="{{asset('image/p9.png')}}"style="width:35px;"><font face="verdana" size="2px" color="#61CE70" >Cold & Cough</font></a>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:#61CE70; width:100%;">
    <a class="dropdown-item" href="#"><font color="white"></font></a>
    <a class="dropdown-item" href="#"><font color="white"></font></a>
    <a class="dropdown-item" href="#"><font color="white"></font></a>
  </div>
  </div>
  </div>


  <div class="col-lg-2">
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; border:#61CE70; height:60px; width:100%; border:#61CE70;">
  <a><img src ="{{asset('image/p5.png')}}"style="width:35px;"><font face="verdana" size="1px" color="#61CE70">Vitamins & Suppliments</font></a>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:#61CE70; width:100%;">
    <a class="dropdown-item" href="#"><font color="white"></font></a>
    <a class="dropdown-item" href="#"><font color="white"></font></a>
    <a class="dropdown-item" href="#"><font color="white"></font></a>
  </div>
  </div>
  </div>


  <div class="col-lg-2">
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; border:#61CE70; height:60px; width:100%; border:#61CE70;">
  <a><img src ="{{asset('image/p10.png')}}"style="width:35px;"><font face="verdana" size="2px" color="#61CE70">Mouth & Teeth</font></a>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:#61CE70; width:100%;">
    <a class="dropdown-item" href="#"><font color="white"></font></a>
    <a class="dropdown-item" href="#"><font color="white"></font></a>
    <a class="dropdown-item" href="#"><font color="white"></font></a>
  </div>
  </div>
  </div>

  <div class="col-lg-2">
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; border:#61CE70; height:60px; width:100%; border:#61CE70;">
  <a><img src ="{{asset('image/p12.png')}}"style="width:35px;"><font face="verdana" size="2px" color="#61CE70">Protection</font></a>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:#61CE70; width:100%;">
    <a class="dropdown-item" href="#"><font color="white"></font></a>
    <a class="dropdown-item" href="#"><font color="white"></font></a>
    <a class="dropdown-item" href="#"><font color="white"></font></a>
  </div>
  </div>
  </div>


</div>

<div class="row" style="background-color: #61CE70;height: 7px;">
   <div class="col-lg-12">

   
   </div>
</div>

        




<div class="row">
<div class="col-lg-2">


</div>

   
   <div class="col-lg-8">

   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src ="{{asset('image/med6.jpg')}}"style="width:35px;" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src ="{{asset('image/med4.jpg')}}"style="width:35px;" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src ="{{asset('image/med7.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


</div>










</body>
</html>