<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
       
     
    <input type="text" id="num1">
    <input type="text" id="num2">
    <input type="button" onclick="sum()" value="find sum">
    <script>
        document.write("anju basheer");
        alert("hi");
        console.log("hi anju basheer");
   
       function sum()
       {
        a=Number(document.getElementById('num1').value);
        b=Number(document.getElementById('num2').value);
        document.write(a+b);
         console.log(a+b);  
             
        }
     </script>
</body>
</html>