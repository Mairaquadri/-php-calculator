<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Font1|Font2&display=swap" rel="stylesheet">
</head>
<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: sans-serif;
    color: #45c9c9;
    background: #45c9c9;
}
.main{
    /* border:2px solid black; */
    height: 500px;
   min-width: 900px;    
   border-radius:10px;
   display:flex;
   justify-content: space-evenly;
   align-items: center;
   background:#99FFFF;
}
.left {
    border-left: 5px solid #45c9c9;
    /* height: 400px; */
    /* width: 400px; */
    display: flex;
    padding: 20px;
    justify-content: center;
    flex-direction: column;
    align-items: start;
    line-height: 2px;
}
.right{
    /* border:2px solid black; */
    height: 400px;
   width: 400px;
   display: flex;
    justify-content: space-evenly;
    align-items: center;
}
form{
    /* border:2px solid black;   */
    height: 200px;
   width: 200px;
}
input {
  border: none; 
  border-bottom: 2px solid #45c9c9; 
  outline: none; 
  margin-bottom: 50px;
  /* width: 100%; */
  background: none;
  font-size:15px;
  color: #187777;
  text-align: center;

}
select{
    width: 100%;
    height: 40px;
    background: white;
    border: 2px solid #45c9c9;
    color: #187777;
    font-size:16px;

}
.button {
    margin-top: 30px;
    padding: 10px 20px;
    border-radius: 5px;
    background: #45c9c9;
    border: none;
    color: #187777;

}
p {
    margin-top: -2px;
    color: #187777;
    height: 41px;
    width: 235px;
}




</style>
<body>
    <div class="main">
<div class="left">
    <h1>php</h1>
    <h1>Calculator</h1>
</div>
<div class="right">
    <form method="POST">

        <input type="text" name="num1" placeholder="please enter number">
        <br>
        <input type="text" name="num2" placeholder="please enter number">
        <select name="operation">
  <option value="addition">Add</option>
  <option value="Subtract">Subtract</option>
  <option value="divide">Divide</option>
  <option value="multiply">Multiply</option>
</select>
<input type="submit" value="submit" class="button" name="register">
<p><?php

//through swotch case

// if(isset($_POST['register'])){
//     $num1 = $_POST['num1'];
//     $num2 = $_POST['num2'];
// $operation=$_POST['operation'];
// switch($operation){
//     case "addition":$plus=$num1+$num2;
//     echo "Addition of 2 number is ".$plus;
//     break;
//     case "Subtract":$minus=$num1-$num2;
//     echo "subtraction of 2 number is ".$minus;
//     break;
//     case "divide":$divide=$num1/$num2;
//     echo "dividion of 2 number is ".$divide;
//     break;
//     case "multiply":$multiply=$num1*$num2;
//     echo "Multiplication of 2 number is ".$multiply;
//     break;
// }


// }

//throgh if else 
if (isset($_POST['register'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    if ($operation == "addition") {
        $plus = $num1 + $num2;
        echo "Addition of 2 numbers is " . $plus;
    } else if ($operation == "Subtract") {
        $minus = $num1 - $num2;
        echo "Subtraction of 2 numbers is " . $minus;
    } else if ($operation == "divide") {
        $divide = $num1 / $num2;
        echo "Division of 2 numbers is " . $divide;
    } else if ($operation == "multiply") {
        $multiply = $num1 * $num2;
        echo "Multiplication of 2 numbers is " . $multiply;
    }
}


?></p>
        </form>
        
</div>


    </div>
    
</body>
</html>