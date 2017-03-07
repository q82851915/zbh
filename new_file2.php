<?php
  $a = strrchr("abc.exe.txt",".");
  $b = substr($a,1);
  echo $b;
  
  echo'<br>';
  
  $c = strrev("1234567890");
  $d = str_split($c,3);
  $e = implode($d,",");
  echo strrev($e);
  
  function ucc($string){
  	$string2 = str_replace("_", " ", $string);
	$string3 = ucwords($string2);
	echo str_replace(" ", "", $string3);
	
  }
    echo'<br>';
  
  $f = "hello_world";
  $g = "rem_by_id";
  ucc($f);
  echo'<br>';
  ucc($g);
  
  echo'<br>';
  
  $pattern = "/^0\d{2,3}-\d{7,8}/";
  $subject = "0571-8765342";
  if (preg_match($pattern,$subject))
    echo 'success';
 else
 	echo 'fail';
?>