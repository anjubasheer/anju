<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>

 <div class="container-fluid" style="background-color=#3b5998" id="header_container">
    <div class="row" div="div_logo">
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <img src="{{asset('image/facebook.jpg')}}" width="220" class="img-responsive">
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" id="login_form">
      <form action="" class="form-inline">
         <div class="form-group col-lg-4 col-md-12 col-sm-12 col-xs-12">
         <label for="email">Email or Phone</label>
         <input type="text" class="form-control" id="subscription" style="display:block; width;100%">
         </div>
         <div class="form-group col-lg-4 col-md-12 col-sm-12 col-xs-12">
         <label for="password">Password</label>
         <input type="text" class="form-control" id="email" style="display:block; width;100%">
          forgotten password?
         </div>
         <div class="form-group col-lg-4 col-md-12 col-sm-12 col-xs-12">
         <button type="submit" class="btn btn-info btn-block" style="margin: top 25px;">Login</button>
         </div>
      </form>
    </div>
</div>
</body>
</html>