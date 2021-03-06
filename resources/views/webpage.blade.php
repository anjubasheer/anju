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
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-12" style="background-color:black; height: 50px;px;">
            <nav class="navbar navbar-light bg-dark">
               <a class="navbar-brand"><img src="{{asset('image/lion.jpg')}} " width="25px"><font face="italic">DUBAI</font></a>
               

                <form class="form-inline">
                   <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              
            </nav>   
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4"style="background-color:black; height: 400px;">
        <figure class="rounded p-3 bg-white shadow-sm">
        <h5 class="display-4">Dubai Tour</h5>
                            <p class="text-muted mb-4">Sign In To Book The Best Memories</p>
          <form>
                <div class="form-group mb-3">
                  <input id="inputEmail" type="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                </div>
                  <div class="form-group mb-3">
                    <input id="inputPassword" type="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                  </div>
                    <div class="custom-control custom-checkbox mb-3">
                  <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                    <label for="customCheck1" class="custom-control-label">Remember password</label>
                  </div>
                    <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign in</button>
                  </form>
                  <div class="dropdown">
                   <button class="btn btn-primary dropdown-toggle rounded-pill shadow-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Places To Visit
                  </button>
                  <div class="dropdown-menu" aria-labelledby="">
                     <a class="dropdown-item" href="#">Ski Dubai</a>
                     <a class="dropdown-item" href="#">Burj Khalifa</a>
                     <a class="dropdown-item" href="#">Al Bastakiya</a>
                     <a class="dropdown-item" href="#">Wild Wadi Water Park</a>
                     <a class="dropdown-item" href="#">Dubai Museum</a>
                     <a class="dropdown-item" href="#">Dubai Zoo</a>
                    </div>
                  </div>
          </figure>
        </div>
     <div class="col-lg-8" style="background-color:black; height: 400px;">
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                   <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{asset('image/dubai1.jpg')}}" height="400px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('image/dubai2.jpg')}}"  height="400px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                       <img src="{{asset('image/dubai3.jpg')}}"  height="400px"class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
           </div>
        </div>
</div>
    

<div class="row">
       <div class="col-md-4" style="background-color:black;">
             <figure class="rounded p-3 bg-white shadow-sm">
             <figcaption class="p-4 card-img-bottom">
              <h1 class="h5 font-weight-bold mb-2 font-italic">Visit Dubai</h1>
              <p class="mb-0 text-small text-muted font-italic">Dubai is a city of immigrants. I've not yet heard people from Dubai celebrate this aspect of their city</p>
              </figcaption>
          </figure>
            </div>
        
        <div class="col-md-4" style="background-color:black;">
        <figure class="rounded p-3 bg-white shadow-sm">
             <figcaption class="p-4 card-img-bottom">
              <h1 class="h5 font-weight-bold mb-2 font-italic">Experience its Diversity </h1>
              <p class="mb-0 text-small text-muted font-italic">Dubai is a gateway city. Dubai's airport claimed the title as the world's busiest from Heathrow in 2015.</p>
              </figcaption>
          </figure>
            </div>
        <div class="col-md-4" style="background-color:black">
        <figure class="rounded p-3 bg-white shadow-sm">
             <figcaption class="p-4 card-img-bottom">
              <h1 class="h5 font-weight-bold mb-2 font-italic">Enjoy its Culture</h1>
              <p class="mb-0 text-small text-muted font-italic">It's making a serious effort to modernize, especially when it comes to women.</p>
              </figcaption>
          </figure>
            </div>
</div>
</div>

    
</body>
</html>