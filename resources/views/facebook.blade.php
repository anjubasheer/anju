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

 <div class="container-fluid" id="div_container">
  <div class="row" id="div_logo">
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" style="background-color:#3b5998;">
      <img src="{{asset('image/facebook.jpg')}}" style="height:60px;" class="img-responsive">
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" id="login-form" style="background-color:#3b5998;">
       <form action="" class="form-inline">
           <div class="form-group col-lg-4 col-md-12 col-sm-12">
                <label for="email"><font face="verdana" text color="white"><small>Email</small></font></label>
                <input type="text" class="form-control" id="subscription" style="display:block; width:100%">
                <small> <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="..." style="text color:white;">Keep me in logged.</small>
            </div>
            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                <label for="password"><font face="verdana"text color="white"><small>Password</small></font></label>
                <input type="password" class="form-control" id="email" style="display:block; width: 100%;">
                <small>Forgotten your password?</small>
            </div>
            <div class="form-group col-lg-2 col-md-12 col-sm-12">
                <button type="submit" class="btn btn-info btn-block" style="margin-top:5px" >Log in</button>
            </div>
        </form>
     </div>     
    </div>
    </div>
 
 
<div class="container-fluid" style="background:linear-gradient(#ffffff, #edf0f5);">
 <div class="row">
    <div class="col-lg-6" id="left_pic_container" >
        <div class=".d-none .d-lg-block .d-xl-none">
           <h3 style="padding-left:100px;padding-top:50px;">
           <font face="verdana" color="darkblue"><b>Facebook helps you connect and share with the people in your life</b></font></h3>
            <img src="{{asset('image/fb1.png')}}" class="img-responsive" style="padding-left:100px; padding-top:50px; ">
        </div>
    </div>
    <div class=" col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <h3><font face="verdana" color="darkblue"><b>Sign Up</b><br>Its free and always be.</font></h3>
          <form action="" class="inline">
             <div class="form-row">
             <div class=" form group col-lg-6 col-md-12 col-sm-12 col-xs-12">  
                <input type="text" class="form-control" placeholder="First name" id="txt_first_name" style="display:block; width:100%;"><br>
             </div>
             <div class="form group col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <input type="text" class="form-control" placeholder="Last name" id="txt_last_name" style="display:block; width:100%;"><br>
             </div>
             </div>
              <div class="form group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <input type="email" class="form-control"  placeholder="Email Adress"></div><br>
              <div class="form group col-lg-12 col-md-12 col-sm-12 col-xs-12">      
                  <input type="email" class="form-control"  placeholder="Re-enter Email"></div><br>
             <div class="form group col-lg-12 col-md-12 col-sm-12 col-xs-12">    
                 <input type="password" class="form-control"  placeholder="New Password"><div><br>
              <div class="form group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <font face="verdana" color="darkblue"><b>Birthday:</b></font></p>
                   <p><select><option>Month</select></option>
                   <select><option>Day</select></option>
                   <select><option>Year</select></option><span><small>Why do I need to provide my birthday?</small></span></p>
                   <input type="radio">Female &nbsp;&nbsp;&nbsp;<input type="radio">male</div>
            <p class="col-lg-8"><font face="verdana" color="darkblue"><small>By clicking the Sign Up, you are agreeing to our terms and that you hav read our data use policy including our cookie use.</small></font></p>
            <div class="form group col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
            <input type="button" class="btn btn-success btn block col-lg-4" value="Sign Up"></div>
    
        </form>
      </div>
    </div>
    </div>
      
  <div class="container-fluid">
     <hr style="margin-top:3px; margin-bottom:3px;">
       <p><small>
            <span style="padding-right:20px;">Pages</span>
            <span style="padding-right:20px;">Friends</span>
            <span style="padding-right:20px;">Privacy</span>
            <span style="padding-right:20px;">Terms</span>
            <span style="padding-right:20px;">Conditions</span>
            <span style="padding-right:20px;">Sign Up</span>
            <span style="padding-right:20px;">Policy</span>
       </p></small>
       <hr style="margin-top:3px; margin-bottom:3px;">
       <p><small> Facebook 2017
       
        </p></small>
 </div>
  
  



 



</body>
</html>