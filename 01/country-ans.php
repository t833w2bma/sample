<?php require_once 'array.php' ?>
<?php
// $answers = 'カナダ'=>'オタワ', 'スイス'=>'ベルン', .... ;

// 2つの配列を比較して,違いがあればそれだけ返してくる関数
$hazures = array_diff( $_GET , $answers)  ;

// 戻り値の数を数えて16.66掛けて100から引けば点数がでます
$total = 100 - count($hazures) * 16.66;
echo "<p>あなたの点数はざっと" ,$total,"です </p>" ;



$total = 0;
foreach( $answers as $k=>$city ){
  //一回目は    カナダ↑  ↑オタワ
  // isset はnull(未定義)を入れても警告を出しません
  // 条件は先に書いた方から評価され&&の場合はfalse以降は評価しない
    if( isset($_GET[$k]) && $_GET[$k] == $city ){
      //  ↑ユーザーの送信値 ↑正解の都市名
      $total += 16.66 ;  
      // 正解した場合のみ加算代入する
    }
}

echo "あなたの点数は", ceil($total) ,"です｡";
//あなたの点数は 99.96 です｡ 
//全問正解したら100になるように整数に切り上げ