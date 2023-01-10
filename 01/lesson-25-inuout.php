<?php include 'header.php';
  // カラで送られた場合に条件分岐が必要
  if( isset($_GET['pet']) ){ //isset() はカラの場合false(警告を出さない)
    // foreach($_GET['pet'] as $pet){
      $str = implode("," , $_GET['pet'] ) ;
      $str = rtrim($str , ",");
      echo $str;
      // }
    echo 'が選ばれました｡';
  }else{
    // チェックしない場合に  とか出してください
    echo "選ばれませんでした";
  }