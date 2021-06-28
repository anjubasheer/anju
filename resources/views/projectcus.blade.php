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
<hr style="margin-top:20px; margin-bottom:3px;">
<div class="row">
    <div class="col-lg-6" style="background-color: #20c997; height: 70px;px;">
        <a class="navbar-brand"><img src="{{asset('image/p1.png')}} " width="40px"><font face=" Arial" size="5px" color="white"><b>PharmaServe</b></font></a>
    </div>
    <div class="col-lg-2" style="background-color: #20c997; height: 70px;px;">
        <button type="button" class="btn btn-light">Light</button>
            
      </div>
               <div class="col-lg-2" style="background-color: #20c997; height: 70px;px;">
            <button type="button" class="btn btn-light">Light</button>
            
               </div>
               <div class="col-md-2" style="background-color: #20c997; height: 70px;px;">
               <form class="form-inline">
                   <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                   <button class="btn btn btn-light my-2 my-sm-0" type="submit">Search</button>
                </form>
             </div> 
            </div>
    
    
        <div class="row">
                    <div class="col-lg-2" style="background-color: #20c997;">
                    <h4 class="display-4">Browse</h4>
                    <div class="dropdown">
    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:100%;">
    Health
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"  style="width:100%;" >
    <a class="dropdown-item" href="#"></a>
    <a class="dropdown-item" href="#"></a>
    <a class="dropdown-item" href="#"></a>
  </div>
</div><br><br>


<div class="dropdown">
  
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Cosmetics
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:100%;">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div><br><br>



<div class="dropdown">

  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    dietary supliments
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:100%;">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div><br><br>


<div class="dropdown">
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    cough cold fever
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:100%;">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div><br><br>


<div class="dropdown">
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    nutrition
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:100%;" >
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div><br><br>


<div class="dropdown">
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Medicine
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:100%;">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>

        </div>
    
                        <div class="col-lg-3 ml-auto"style="background-color: #20c997;">
                            <h3 class="display-4">Login</h3>
                            <p class="text-muted mb-4"></p>
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
                                <button type="submit" class="btn-block text-uppercase mb-2 rounded-pill shadow-sm">Login</button>
                                
                            </form>
                            <h3 class="display-4">Sign Up</h3>
                            <p class="text-muted mb-4"></p>
                            <form>
                            <div class="form-group mb-3">
                                    <input id="inputEmail" type="email" placeholder="User Name" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                    <input id="inputEmail" type="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                    <input id="inputPassword" type="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <div class="form-group mb-3">
                                    <input id="inputPassword" type="password" placeholder="Repeat Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <button type="submit" class="btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign In</button>
                                
                            </form>
                        </div>
                    </div>







                    <h3 style="text-align: center; padding:10px;"><font face="verdana" color="white">Browse Categories</font></h3>
    
    
    <div class="btn-group dropright" style="width:100%; height:40px;">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; height:50px;">
              <a><img src ="{{asset('image/p4.png')}}"style="width:35px;"><font face="verdana" size="4px" color="#61CE70">Health & Nutrition</font></a>
         </button>
<div class="dropdown-menu">
  <span class="dropdown-item-text"><b>Nutrition</b></span>
  <a class="dropdown-item" href="#">Omega Acid Drops</a>
  <a class="dropdown-item" href="#">Nutritional Yeast</a>
  <a class="dropdown-item" href="#">Whey Shake</a>
  <a class="dropdown-item" href="#">Activated Carbon</a>
  <a class="dropdown-item" href="#">Vegetable Protein</a>
  <a class="dropdown-item" href="#">Natural Diuretics</a>

  <span class="dropdown-item-text"><b>Probiotics</b></span>
  <a class="dropdown-item" href="#">Inulin Drink</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Three-Culture Mix</a>
  <a class="dropdown-item" href="#">Lactobacillus Tablets</a>
  <a class="dropdown-item" href="#">Probiotic Baby Drops</a>
  <a class="dropdown-item" href="#">Chocobiotics</a>

  <span class="dropdown-item-text"><b>Skincare</b></span>
  <a class="dropdown-item" href="#">Daily Moisturizer</a>
  <a class="dropdown-item" href="#">Dry Skin Salve</a>
  <a class="dropdown-item" href="#">Acne Tonic</a>
  <a class="dropdown-item" href="#">50+ Night Creme</a>
  <a class="dropdown-item" href="#">SPF Day Creme</a>
  <a class="dropdown-item" href="#">Kids’ Winter Balm</a>


  <span class="dropdown-item-text"><b>Vitamins</b></span>
  <a class="dropdown-item" href="#">Vitamin C 1000mg</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Vitamin D Oil Caps</a>
  <a class="dropdown-item" href="#">B Complex Vitaminss</a>
  <a class="dropdown-item" href="#">Iron And Zinc</a>
  <a class="dropdown-item" href="#">Daily ACE Kids</a>
  <a class="dropdown-item" href="#">Multivitamin Drink</a>
</div>
</div><br><br>




<div class="btn-group dropright" style="width:100%; height:40px;">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; height:50px;">
         <a><img src ="{{asset('image/p3.png')}}"style="width:35px;"><font face="verdana" size="4px" color="#61CE70">Personel Care</font></a>
    </button>
<div class="dropdown-menu">
   <span class="dropdown-item-text"><b>Nutrition</b></span>
  <a class="dropdown-item" href="#">Omega Acid Drops</a>
  <a class="dropdown-item" href="#">Nutritional Yeast</a>
  <a class="dropdown-item" href="#">Whey Shake</a>
  <a class="dropdown-item" href="#">Activated Carbon</a><
  <a class="dropdown-item" href="#">Vegetable Protein</a>
  <a class="dropdown-item" href="#">Natural Diuretics</a>

  <span class="dropdown-item-text"><b>Probiotics</b></span>
  <a class="dropdown-item" href="#">Inulin Drink</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Three-Culture Mix</a>
  <a class="dropdown-item" href="#">Lactobacillus Tablets</a>
  <a class="dropdown-item" href="#">Probiotic Baby Drops</a>
  <a class="dropdown-item" href="#">Chocobiotics</a>

   <span class="dropdown-item-text"><b>Skincare</b></span>
   <a class="dropdown-item" href="#">Daily Moisturizer</a>
  <a class="dropdown-item" href="#">Dry Skin Salve</a>
  <a class="dropdown-item" href="#">Acne Tonic</a>
  <a class="dropdown-item" href="#">50+ Night Creme</a>
  <a class="dropdown-item" href="#">SPF Day Creme</a>
  <a class="dropdown-item" href="#">Kids’ Winter Balm</a>


  <span class="dropdown-item-text"><b>Vitamins</b></span>
  <a class="dropdown-item" href="#">Vitamin C 1000mg</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Vitamin D Oil Caps</a>
  <a class="dropdown-item" href="#">B Complex Vitaminss</a>
  <a class="dropdown-item" href="#">Iron And Zinc</a>
  <a class="dropdown-item" href="#">Daily ACE Kids</a>
  <a class="dropdown-item" href="#">Multivitamin Drink</a>
</div>
</div><br><br>


<div class="btn-group dropright" style="width:100%; height:40px;  ">
         <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; height:50px;">
         <a><img src ="{{asset('image/p5.png')}}"style="width:35px;"><font face="verdana" size="4px" color="#61CE70">Baby Care</font></a>
         </button>
<div class="dropdown-menu">
  <span class="dropdown-item-text"><b>Nutrition</b></span>
  <a class="dropdown-item" href="#">Omega Acid Drops</a>
  <a class="dropdown-item" href="#">Nutritional Yeast</a>
  <a class="dropdown-item" href="#">Whey Shake</a>
  <a class="dropdown-item" href="#">Activated Carbon</a>
  <a class="dropdown-item" href="#">Vegetable Protein</a>
  <a class="dropdown-item" href="#">Natural Diuretics</a>

  <span class="dropdown-item-text"><b>Probiotics</b></span>
  <a class="dropdown-item" href="#">Inulin Drink</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Three-Culture Mix</a>
  <a class="dropdown-item" href="#">Lactobacillus Tablets</a>
  <a class="dropdown-item" href="#">Probiotic Baby Drops</a>
  <a class="dropdown-item" href="#">Chocobiotics</a>

  <span class="dropdown-item-text"><b>Skincare</b></span>
  <a class="dropdown-item" href="#">Daily Moisturizer</a>
  <a class="dropdown-item" href="#">Dry Skin Salve</a>
  <a class="dropdown-item" href="#">Acne Tonic</a>
  <a class="dropdown-item" href="#">50+ Night Creme</a>
  <a class="dropdown-item" href="#">SPF Day Creme</a>
  <a class="dropdown-item" href="#">Kids’ Winter Balm</a>


  <span class="dropdown-item-text"><b>Vitamins</b></span>
  <a class="dropdown-item" href="#">Vitamin C 1000mg</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Vitamin D Oil Caps</a>
  <a class="dropdown-item" href="#">B Complex Vitaminss</a>
  <a class="dropdown-item" href="#">Iron And Zinc</a>
  <a class="dropdown-item" href="#">Daily ACE Kids</a>
  <a class="dropdown-item" href="#">Multivitamin Drink</a>
</div>
</div><br><br>


<div class="btn-group dropright" style="width:100%; height:40px;  ">
         <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; height:50px;">
         <a><img src ="{{asset('image/p4.png')}}"style="width:35px;"><font face="verdana" size="4px" color="#61CE70">Women Care</font></a>
         </button>
<div class="dropdown-menu">
  <span class="dropdown-item-text"><b>Nutrition</b></span>
  <a class="dropdown-item" href="#">Omega Acid Drops</a>
  <a class="dropdown-item" href="#">Nutritional Yeast</a>
  <a class="dropdown-item" href="#">Whey Shake</a>
  <a class="dropdown-item" href="#">Activated Carbon</a>
  <a class="dropdown-item" href="#">Vegetable Protein</a>
  <a class="dropdown-item" href="#">Natural Diuretics</a>

  <span class="dropdown-item-text"><b>Probiotics</b></span>
  <a class="dropdown-item" href="#">Inulin Drink</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Three-Culture Mix</a>
  <a class="dropdown-item" href="#">Lactobacillus Tablets</a>
  <a class="dropdown-item" href="#">Probiotic Baby Drops</a>
  <a class="dropdown-item" href="#">Chocobiotics</a>

  <span class="dropdown-item-text"><b>Skincare</b></span>
  <a class="dropdown-item" href="#">Daily Moisturizer</a>
  <a class="dropdown-item" href="#">Dry Skin Salve</a>
  <a class="dropdown-item" href="#">Acne Tonic</a>
  <a class="dropdown-item" href="#">50+ Night Creme</a>
  <a class="dropdown-item" href="#">SPF Day Creme</a>
  <a class="dropdown-item" href="#">Kids’ Winter Balm</a>


  <span class="dropdown-item-text"><b>Vitamins</b></span>
  <a class="dropdown-item" href="#">Vitamin C 1000mg</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Vitamin D Oil Caps</a>
  <a class="dropdown-item" href="#">B Complex Vitaminss</a>
  <a class="dropdown-item" href="#">Iron And Zinc</a>
  <a class="dropdown-item" href="#">Daily ACE Kids</a>
  <a class="dropdown-item" href="#">Multivitamin Drink</a>
</div>
</div><br><br>


<div class="btn-group dropright" style="width:100%; height:40px;  ">
         <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; height:50px;">
         <a><img src ="{{asset('image/p8.png')}}"style="width:35px;"><font face="verdana" size="4px" color="#61CE70">Home Essentialss</font></a>
         </button>
<div class="dropdown-menu">
  <span class="dropdown-item-text"><b>Nutrition</b></span>
  <a class="dropdown-item" href="#">Omega Acid Drops</a>
  <a class="dropdown-item" href="#">Nutritional Yeast</a>
  <a class="dropdown-item" href="#">Whey Shake</a>
  <a class="dropdown-item" href="#">Activated Carbon</a>
  <a class="dropdown-item" href="#">Vegetable Protein</a>
  <a class="dropdown-item" href="#">Natural Diuretics</a>

  <span class="dropdown-item-text"><b>Probiotics</b></span>
  <a class="dropdown-item" href="#">Inulin Drink</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Three-Culture Mix</a>
  <a class="dropdown-item" href="#">Lactobacillus Tablets</a>
  <a class="dropdown-item" href="#">Probiotic Baby Drops</a>
  <a class="dropdown-item" href="#">Chocobiotics</a>

  <span class="dropdown-item-text"><b>Skincare</b></span>
  <a class="dropdown-item" href="#">Daily Moisturizer</a>
  <a class="dropdown-item" href="#">Dry Skin Salve</a>
  <a class="dropdown-item" href="#">Acne Tonic</a>
  <a class="dropdown-item" href="#">50+ Night Creme</a>
  <a class="dropdown-item" href="#">SPF Day Creme</a>
  <a class="dropdown-item" href="#">Kids’ Winter Balm</a>


  <span class="dropdown-item-text"><b>Vitamins</b></span>
  <a class="dropdown-item" href="#">Vitamin C 1000mg</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Vitamin D Oil Caps</a>
  <a class="dropdown-item" href="#">B Complex Vitaminss</a>
  <a class="dropdown-item" href="#">Iron And Zinc</a>
  <a class="dropdown-item" href="#">Daily ACE Kids</a>
  <a class="dropdown-item" href="#">Multivitamin Drink</a>
</div>
</div><br><br>


<div class="btn-group dropright" style="width:100%; height:40px;">
         <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; height:50px;">
            <a><img src ="{{asset('image/p9.png')}}"style="width:35px;"><font face="verdana" size="4px" color="#61CE70">Cold & Cough</font></a>
         </button>
<div class="dropdown-menu">
  <span class="dropdown-item-text"><b>Nutrition</b></span>
  <a class="dropdown-item" href="#">Omega Acid Drops</a>
  <a class="dropdown-item" href="#">Nutritional Yeast</a>
  <a class="dropdown-item" href="#">Whey Shake</a>
  <a class="dropdown-item" href="#">Activated Carbon</a>
  <a class="dropdown-item" href="#">Vegetable Protein</a>
  <a class="dropdown-item" href="#">Natural Diuretics</a>

  <span class="dropdown-item-text"><b>Probiotics</b></span>
  <a class="dropdown-item" href="#">Inulin Drink</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Three-Culture Mix</a>
  <a class="dropdown-item" href="#">Lactobacillus Tablets</a>
  <a class="dropdown-item" href="#">Probiotic Baby Drops</a>
  <a class="dropdown-item" href="#">Chocobiotics</a>

  <span class="dropdown-item-text"><b>Skincare</b></span>
  <a class="dropdown-item" href="#">Daily Moisturizer</a>
  <a class="dropdown-item" href="#">Dry Skin Salve</a>
  <a class="dropdown-item" href="#">Acne Tonic</a>
  <a class="dropdown-item" href="#">50+ Night Creme</a>
  <a class="dropdown-item" href="#">SPF Day Creme</a>
  <a class="dropdown-item" href="#">Kids’ Winter Balm</a>


  <span class="dropdown-item-text"><b>Vitamins</b></span>
  <a class="dropdown-item" href="#">Vitamin C 1000mg</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Vitamin D Oil Caps</a>
  <a class="dropdown-item" href="#">B Complex Vitaminss</a>
  <a class="dropdown-item" href="#">Iron And Zinc</a>
  <a class="dropdown-item" href="#">Daily ACE Kids</a>
  <a class="dropdown-item" href="#">Multivitamin Drink</a>
</div>
</div>
<br><br>

<div class="btn-group dropright" style="width:100%; height:40px;  ">
         <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; height:50px;">
         <a><img src ="{{asset('image/p7.png')}}"style="width:35px;"><font face="verdana" size="4px" color="#61CE70">Pain Relief</font></a>
         </button>
         <div class="dropdown-menu">
            
  <span class="dropdown-item-text"><b>Nutrition</b></span>
  <a class="dropdown-item" href="#">Omega Acid Drops</a>
  <a class="dropdown-item" href="#">Nutritional Yeast</a>
  <a class="dropdown-item" href="#">Whey Shake</a>
  <a class="dropdown-item" href="#">Activated Carbon</a>
  <a class="dropdown-item" href="#">Vegetable Protein</a>
  <a class="dropdown-item" href="#">Natural Diuretics</a>

  <span class="dropdown-item-text"><b>Probiotics</b></span>
  <a class="dropdown-item" href="#">Inulin Drink</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Three-Culture Mix</a>
  <a class="dropdown-item" href="#">Lactobacillus Tablets</a>
  <a class="dropdown-item" href="#">Probiotic Baby Drops</a>
  <a class="dropdown-item" href="#">Chocobiotics</a>

  <span class="dropdown-item-text"><b>Skincare</b></span>
<a class="dropdown-item" href="#">Daily Moisturizer</a>
  <a class="dropdown-item" href="#">Dry Skin Salve</a>
  <a class="dropdown-item" href="#">Acne Tonic</a>
  <a class="dropdown-item" href="#">50+ Night Creme</a>
  <a class="dropdown-item" href="#">SPF Day Creme</a>
  <a class="dropdown-item" href="#">Kids’ Winter Balm</a>


  <span class="dropdown-item-text"><b>Vitamins</b></span>
  <a class="dropdown-item" href="#">Vitamin C 1000mg</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Vitamin D Oil Caps</a>
  <a class="dropdown-item" href="#">B Complex Vitaminss</a>
  <a class="dropdown-item" href="#">Iron And Zinc</a>
  <a class="dropdown-item" href="#">Daily ACE Kids</a>
  <a class="dropdown-item" href="#">Multivitamin Drink</a>
</div>
</div><br><br>


<div class="btn-group dropright" style="width:100%; height:40px;  ">
         <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; height:50px;">
         <a><img src ="{{asset('image/p6.png')}}"style="width:35px;"><font face="verdana" size="4px" color="#61CE70">Health Devices</font></a>
         </button>
         <div class="dropdown-menu">
            
  <span class="dropdown-item-text"><b>Nutrition</b></span>
  <a class="dropdown-item" href="#">Omega Acid Drops</a>
  <a class="dropdown-item" href="#">Nutritional Yeast</a>
  <a class="dropdown-item" href="#">Whey Shake</a>
  <a class="dropdown-item" href="#">Activated Carbon</a>
  <a class="dropdown-item" href="#">Vegetable Protein</a>
  <a class="dropdown-item" href="#">Natural Diuretics</a>

  <span class="dropdown-item-text"><b>Probiotics</b></span>
  <a class="dropdown-item" href="#">Inulin Drink</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Three-Culture Mix</a>
  <a class="dropdown-item" href="#">Lactobacillus Tablets</a>
  <a class="dropdown-item" href="#">Probiotic Baby Drops</a>
  <a class="dropdown-item" href="#">Chocobiotics</a>

  <span class="dropdown-item-text"><b>Skincare</b></span>
<a class="dropdown-item" href="#">Daily Moisturizer</a>
  <a class="dropdown-item" href="#">Dry Skin Salve</a>
  <a class="dropdown-item" href="#">Acne Tonic</a>
  <a class="dropdown-item" href="#">50+ Night Creme</a>
  <a class="dropdown-item" href="#">SPF Day Creme</a>
  <a class="dropdown-item" href="#">Kids’ Winter Balm</a>


  <span class="dropdown-item-text"><b>Vitamins</b></span>
  <a class="dropdown-item" href="#">Vitamin C 1000mg</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Vitamin D Oil Caps</a>
  <a class="dropdown-item" href="#">B Complex Vitaminss</a>
  <a class="dropdown-item" href="#">Iron And Zinc</a>
  <a class="dropdown-item" href="#">Daily ACE Kids</a>
  <a class="dropdown-item" href="#">Multivitamin Drink</a>
</div>
</div><br><br>


<div class="btn-group dropright" style="width:100%; height:40px;  ">
         <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; height:50px;">
         <a><img src ="{{asset('image/p5.png')}}"style="width:35px;"><font face="verdana" size="4px" color="#61CE70">Vitamins & Suppliments</font></a>
         </button>
         <div class="dropdown-menu">
            
  <span class="dropdown-item-text"><b>Nutrition</b></span>
  <a class="dropdown-item" href="#">Omega Acid Drops</a>
  <a class="dropdown-item" href="#">Nutritional Yeast</a>
  <a class="dropdown-item" href="#">Whey Shake</a>
  <a class="dropdown-item" href="#">Activated Carbon</a>
  <a class="dropdown-item" href="#">Vegetable Protein</a>
  <a class="dropdown-item" href="#">Natural Diuretics</a>

  <span class="dropdown-item-text"><b>Probiotics</b></span>
  <a class="dropdown-item" href="#">Inulin Drink</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Three-Culture Mix</a>
  <a class="dropdown-item" href="#">Lactobacillus Tablets</a>
  <a class="dropdown-item" href="#">Probiotic Baby Drops</a>
  <a class="dropdown-item" href="#">Chocobiotics</a>

  <span class="dropdown-item-text"><b>Skincare</b></span>
<a class="dropdown-item" href="#">Daily Moisturizer</a>
  <a class="dropdown-item" href="#">Dry Skin Salve</a>
  <a class="dropdown-item" href="#">Acne Tonic</a>
  <a class="dropdown-item" href="#">50+ Night Creme</a>
  <a class="dropdown-item" href="#">SPF Day Creme</a>
  <a class="dropdown-item" href="#">Kids’ Winter Balm</a>


  <span class="dropdown-item-text"><b>Vitamins</b></span>
  <a class="dropdown-item" href="#">Vitamin C 1000mg</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Vitamin D Oil Caps</a>
  <a class="dropdown-item" href="#">B Complex Vitaminss</a>
  <a class="dropdown-item" href="#">Iron And Zinc</a>
  <a class="dropdown-item" href="#">Daily ACE Kids</a>
  <a class="dropdown-item" href="#">Multivitamin Drink</a>
</div>
</div><br><br>


<div class="btn-group dropright" style="width:100%; height:40px;  ">
         <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; height:50px;">
         <a><img src ="{{asset('image/p10.png')}}"style="width:35px;"><font face="verdana" size="4px" color="#61CE70">Mouth & Teeth</font></a>
         </button>
         <div class="dropdown-menu">
            
  <span class="dropdown-item-text"><b>Nutrition</b></span>
  <a class="dropdown-item" href="#">Omega Acid Drops</a>
  <a class="dropdown-item" href="#">Nutritional Yeast</a>
  <a class="dropdown-item" href="#">Whey Shake</a>
  <a class="dropdown-item" href="#">Activated Carbon</a>
  <a class="dropdown-item" href="#">Vegetable Protein</a>
  <a class="dropdown-item" href="#">Natural Diuretics</a>

  <span class="dropdown-item-text"><b>Probiotics</b></span>
  <a class="dropdown-item" href="#">Inulin Drink</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Three-Culture Mix</a>
  <a class="dropdown-item" href="#">Lactobacillus Tablets</a>
  <a class="dropdown-item" href="#">Probiotic Baby Drops</a>
  <a class="dropdown-item" href="#">Chocobiotics</a>

  <span class="dropdown-item-text"><b>Skincare</b></span>
<a class="dropdown-item" href="#">Daily Moisturizer</a>
  <a class="dropdown-item" href="#">Dry Skin Salve</a>
  <a class="dropdown-item" href="#">Acne Tonic</a>
  <a class="dropdown-item" href="#">50+ Night Creme</a>
  <a class="dropdown-item" href="#">SPF Day Creme</a>
  <a class="dropdown-item" href="#">Kids’ Winter Balm</a>


  <span class="dropdown-item-text"><b>Vitamins</b></span>
  <a class="dropdown-item" href="#">Vitamin C 1000mg</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Vitamin D Oil Caps</a>
  <a class="dropdown-item" href="#">B Complex Vitaminss</a>
  <a class="dropdown-item" href="#">Iron And Zinc</a>
  <a class="dropdown-item" href="#">Daily ACE Kids</a>
  <a class="dropdown-item" href="#">Multivitamin Drink</a>
</div>
</div><br><br>


<div class="btn-group dropright" style="width:100%; height:40px;">

         <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; height:50px;">
           <img src ="{{asset('image/p12.png')}}"style="width:35px;"><font face="verdana" size="4px" color="#61CE70">Protection</font>
         </button>
         <div class="dropdown-menu">
            
  <span class="dropdown-item-text"><b>Nutrition</b></span>
  <a class="dropdown-item" href="#">Omega Acid Drops</a>
  <a class="dropdown-item" href="#">Nutritional Yeast</a>
  <a class="dropdown-item" href="#">Whey Shake</a>
  <a class="dropdown-item" href="#">Activated Carbon</a>
  <a class="dropdown-item" href="#">Vegetable Protein</a>
  <a class="dropdown-item" href="#">Natural Diuretics</a>

  <span class="dropdown-item-text"><b>Probiotics</b></span>
  <a class="dropdown-item" href="#">Inulin Drink</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Three-Culture Mix</a>
  <a class="dropdown-item" href="#">Lactobacillus Tablets</a>
  <a class="dropdown-item" href="#">Probiotic Baby Drops</a>
  <a class="dropdown-item" href="#">Chocobiotics</a>

  <span class="dropdown-item-text"><b>Skincare</b></span>
  <a class="dropdown-item" href="#">Daily Moisturizer</a>
  <a class="dropdown-item" href="#">Dry Skin Salve</a>
  <a class="dropdown-item" href="#">Acne Tonic</a>
  <a class="dropdown-item" href="#">50+ Night Creme</a>
  <a class="dropdown-item" href="#">SPF Day Creme</a>
  <a class="dropdown-item" href="#">Kids’ Winter Balm</a>


  <span class="dropdown-item-text"><b>Vitamins</b></span>
  <a class="dropdown-item" href="#">Vitamin C 1000mg</a>
  <a class="dropdown-item" href="#">Boulardi Capsules</a>
  <a class="dropdown-item" href="#">Vitamin D Oil Caps</a>
  <a class="dropdown-item" href="#">B Complex Vitaminss</a>
  <a class="dropdown-item" href="#">Iron And Zinc</a>
  <a class="dropdown-item" href="#">Daily ACE Kids</a>
  <a class="dropdown-item" href="#">Multivitamin Drink</a>
   </div>
  </div>


</div>




<div class="col-lg-2">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#61CE70; height:60px; width:100%; border:#61CE70;">
    <font face="verdana" size="5px">Home</font>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:#61CE70; width:100%">
    <a class="dropdown-item" href="#"><font color="white">Main Home</font></a>
    <a class="dropdown-item" href="#"><font color="white"></font></a>
    <a class="dropdown-item" href="#"><font color="white">Something else here</font></a>
  </div>
</div>

</div>
                

</body>
</html>