<?php

$id=$_POST['id'];
$password=$_POST['password'];

if ($id==123 && $password=="admin")
 {
	echo "<script>alert('Your Login Successfully')</script>";
}
 else
  {
   echo "<script>alert('You have entered wrong id and password')</script>";
}
?>
