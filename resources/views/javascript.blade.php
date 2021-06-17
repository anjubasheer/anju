<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>  
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
     a=0;
     b=1;
     s=0;
     limit=Number(prompt("enter a limit" ));
     console.log(a);
     console.log(b);
    

    for(i=2; i<limit; i++)
        {
           s=a+b;
           console.log(s);
           a=b;
           b=s;
        }
    mark=[];
    sum=0;
    
    for(i=0;i<5;i++){
        a=Number(prompt("enter your mark" +i));
        mark.push(a);
    }

    
    for(i of mark){
        console.log(i);
        sum= sum + mark[i];
        console.log("sum");
    }
    
    switch(true){
        case sum>=90:
            console.log("A grade");
        break;
        case sum>=80:
        console.log("B grade");
        break;
        case sum>=70:
            console.log("C grade");
        break;
        case sum>60:
            console.log("D grade");
        break;
        default: console.log("F grade")
    }
   </script>
</body>
</html>