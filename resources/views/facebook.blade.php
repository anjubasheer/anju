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
    <div class="col-lg-6 col-md-12 col-sm-12 " style="background-color:#3b5998;height: 100px;">
      <img src="{{asset('image/facebook.jpg')}}" width="220">
    </div>
    <div class="col-lg-6" style="background-color:#3b5998;height: 100px;" >
       <form>
           <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4"><font face="verdana" text color="white">Email</font></label>
                <input type="email" class="form-control" style="display:block; width: 100%;">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked" text color="white">
                  Keep me logged in
                </label>
                </div>
            <div class="form-group col-md-5">
                <label for="inputPassword4"><font face="verdana"text color="white">Password</font></label>
                <input type="password" class="form-control" id="inputPassword4 "style="display:block; width: 100%;">
                <button type="button" class="btn btn-link" text color="white">Forgotten your password?</button>
            </div>
            <div class="form-group col-md-3" style="padding: 30px; ">
                <button type="submit" class="btn btn-primary">Log in</button>
            </div>
          </div>
      </form>
   </div>
  </div>
   <div class="row">
    <div class="col-lg-6 hidden-md" style="background-color:#edf0f5; height:550px;padding:100px 50px;">
    <p><font face="verdana" color="darkblue"><b>Facebook helps you connect and share with the people in your life</b></font> </p>
    <img src="{{asset('image/fb1.png')}}" >
    </div>
    <div class="col-lg-6" style="background-color:#edf0f5; height:550px;">
        <form>
          <div class="row">
              <div class="col-md-6">
                 <p style="padding: 10px;"><font face="verdana" color="darkblue"><b>Sign Up</b><br>Its free and always be.</font></p>
                  <input type="text" class="form-control" placeholder="First name">
              </div>
                  <div class="col-md-6">
                  <p style="padding:33px;"></p>
                  <input type="text" class="form-control" placeholder="Last name">
              </div>
          </div>
        </form>
        <form>
          <p style="padding:5px;"></p>
          <input type="email" class="form-control"  placeholder="Email Adress">
          <p style="padding:5px;"></p>
          <input type="email" class="form-control"  placeholder="Re-enter Email">
          <p style="padding:5px;"></p>
          <input type="password" class="form-control"  placeholder="New Password">
          <p style="padding:5px;"><font face="verdana" color="darkblue"><b>Birthday:</b></font></p>
          <p><select><option>Month</select></option>
             <select><option>Day</select></option>
             <select><option>Year</select></option><span><small>Why do I need to provide my birthday?</small></span></p>
          
          <input type="radio">Female &nbsp;&nbsp;&nbsp;<input type="radio">male
          <p><font face="verdana" color="darkblue"><small>By clicking the Sign Up, you are agreeing to our terms and that you hav read our data use policy including our cookie use.</small></font></p>
          <input type="button" class="btn btn-success btn block col-lg-3" value="Sign Up">

        </form>   
      </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
 
    <p><font face="verdana" color="darkblue"><small>Mobile &nbsp; Find Friends &nbsp; Badges &nbsp; People &nbsp; About &nbsp; Advertise &nbsp; Create Page &nbsp; Developers &nbsp; Careers &nbsp; Privacy &nbsp; Terms &nbsp; Help </small></font></p>

    </div>
  </div>
</div>

 
</body>
</html>