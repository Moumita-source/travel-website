<?php

 $server="localhost";
 $username="root";
 $password="";

 $con=mysqli_connect($server,$username,$password);

 if(!$con){
     die("Connection to this database failed due to ".mysqli_connect_error());
 }

 $name=$_POST['name'];
 $age=$_POST['age'];
 $gender=$_POST['gender'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $desc=$_POST['desc'];




 $sql="INSERT INTO `trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

 echo $sql;



?>