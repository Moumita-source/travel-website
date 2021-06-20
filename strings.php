<?php

  $var="THIS IS ME !";
  echo $var;

  $len=strlen($var);

  echo "The length of the string is :        ".$len."Got your length!";
  
  echo "<br>";

  echo "The word count of the string : ".str_word_count($var). "Its the word count";
  echo "<br>";

  echo "The reverse of the string is : ".strrev($var);
  echo "<br>";

  echo "The search for the word : ".strpos($var,"IS");
  echo "<br>";

  echo "The replaced string : ".str_replace("IS","AT",$var);
  echo "<br>";

?>