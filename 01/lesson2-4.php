<?php include 'header.php'; ?>
Lesson 2-04 分岐
  構文 if もし~なら

  if( 条件 ){  
    波括弧で処理をくくる
    この中が条件が合致した場合のみ実行される
  }
  ここは条件と関係なく実行されます
  45P
   比較演算子
   false という値です 偽の意味
   true  という値です 真 〃
   'true'という文字です
  10進数   2進数 2から先がない世界
  0       0
  1       1
  2      10   桁が上がる 
  3      11   
  9
 10  桁が上がる   
 
 true , false は  bool型です
 bool型は 2つの値しかありません
 これを表すのに2進数では何桁必要でしょうか ?
 0か1だけなので 1桁です

<?php
  var_dump('a'== 1 ) ; // 値だけじゃなく式の結果も見れる

  var_dump( true == 1 ) ; //true 値としては等しい
  var_dump( true === 1 ); //false 型も含めると等しくない
  
  var_dump( 2 >= 2 ); // 2は2以上なのでtrue
  var_dump( 2 > 2 );  // 2は2より大きくないのでfalse

  var_dump( 2 <=> 2 ); 
  var_dump( 2 <=> 1 ); 
  var_dump( 1 <=> 2 ); 
