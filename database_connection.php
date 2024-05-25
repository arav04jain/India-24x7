<?php
$mysqli = new mysqli("localhost","root","","india_24x7");

if ($mysqli -> connect_errno) {
  echo "Error on page";
  exit();
} 
?>