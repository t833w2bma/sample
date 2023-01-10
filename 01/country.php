<?php require_once 'array.php' ?>
<form action="country-ans.php" >

<?php //country.php \n → ',\n'',

/*
練習 送信ボタンも付けて送れるようにしましょう
練習 イギリスを加えてください
練習 都市を 15回繰り返してラジオボタンで出してみましょう 
改行してください
カナダはどうやったら出せますか?
オタワを選んで,バルセロナを選ぶと,オタワが消える
77P と同じ
foreach as $key => $key はオプション 
  配列のキーが入る (使わなければ書かなくていい)
*/ 
  foreach ($country as $key => $citis) {
    echo "<h4>$key</h4>"; // ← 国がでる
    shuffle($citis);  //←配列をシャッフルします

    foreach ($citis as $city) { // ←都市のループ
?>
<label>
  <input type="radio" name="<?=$key?>" required value="<?=$city?>" > 
<!-- 属性 required は ="" が不要です｡ (値がtrue,falseのどちらかなので) -->
  <?=$city?>
</label>

 <?php }
} ?>

  <p><input type="submit" value="送信"></p>
</form>

<style>
  label{display: block;} /*改行される*/
  h4{margin-bottom: .5rem ;}
  [type="radio"]{zoom:125%}
  /*↑属性セレクタ*/
</style>
