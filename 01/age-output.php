<?php require 'header.php';  

$min_age = 12 ; //乗れる乗れないの境界
$max_age = 100 ; //乗れる乗れないの境界

if($_POST['age'] >= $min_age && $_POST['age'] < $max_age){
  echo '乗れる';
}else{
  echo '乗れない';
}

// var_dump( $_POST['price'] );  
