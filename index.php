<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    
 <div class="container">
    My first php tutorial
   <?php
      define('pi',3.14);
     echo "Hi New to php!";
     //This is single line comment

     /*
     This is multi line comment


     */

     $variable1=24;
     $variable2=56;

     echo $variable1;
     echo $variable2;

     echo $variable1+$variable2;
    //  Arithmetic operators
    echo "The value of variable1 and variable2 is ";
    echo $variable2+$variable2;
    echo "<br>";
    echo "Subtracting of variable1 and variable2 is ";
    echo $variable2-$variable2;
    echo "<br>";
    echo "Multiply of variable1 and variable2 is ";
    echo $variable2*$variable2;
    echo "<br>";
    echo "The value of variable1 and variable2 is ";
    echo $variable2/$variable2;
    echo "<br>";
    //Assignment oprators
    $newvariable=$variable2;
    $newvariable+=30;
    echo "The new variabe is ";
    echo $newvariable;
    echo "<br>";
    //comparison operator
    echo "To compare things";
    echo "<br>";
    echo "To check if (1==4)";
    echo var_dump(1==4);
    echo "<br>";
    echo "To check if (1!=4)";
    echo var_dump(1!=4);
    echo "<br>";
    echo "To check if (1>=4)";
    echo var_dump(1>=4);
    echo "<br>";
    echo "To check if (1<=4)";
    echo var_dump(1<=4);
    echo "<br>";

    //Increment decrement operator
    $variable2++;
    echo $variable2;
    echo "<br>";

    //logical operators
    $var1= true and false;
    echo $var1;
    echo "<br>";
    $var2= true or false;
    echo $var2;
    echo "<br>";
    $var3= true xor false;
    echo $var3;
    echo "<br>";


    //datatypes in php

    $var="This is string";
    echo var_dump($var);
    echo "<br>";
    $v=67;
    echo var_dump($v);
    echo "<br>";
    $v1=67.2;
    echo var_dump($v1);
    echo "<br>";
    $v2=true;
    echo var_dump($v2);
    echo "<br>";
    echo pi;


  ?>




 </div>



</body>
</html>