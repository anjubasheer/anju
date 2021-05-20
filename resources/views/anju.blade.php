<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    
        
    
</head>
<body>
    <img src ="{{asset('image/f1.jpg')}}" >
    
    <h1 class="title">PHP<h1>
     <?php
     echo "hello world <br>";
    
     $x = 1;
     while($x<=5)
     {
     echo "the number is : $x <br>";
     $x++;
     }

     ?>

     
    
    
</body>
</html>