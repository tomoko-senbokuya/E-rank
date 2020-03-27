<?php
if( isset($_GET['submit'] )){
 //採点ボタンを押していたら
  $seikai = 0;
  $trueAns = [0,5,8,10,14];
  for ( $i=0; $i<5; $i++) {
    $q=$i+1 ;//Qは1から始まるので
    if(isset($_GET["Q$q"]) && $_GET["Q$q"] == $trueAns[$i]) 
    $seikai++;
  }
  echo "あなたは",$seikai*20,"点でした！";
}
?>
<form name="radioB">
<?php  // "Z:\06_php\otawa\C001-radio.txt"
$city = ["オタワ","トロント","モントリオール","ジュネーブ","チューリッヒ","ベルン","ハンブルク","ブレーメン","ベルリン","バルセロナ","マドリード","リスボン","シドニー","メルボルン","キャンベラ"];
$country = ["カナダ","スイス","ドイツ","スペイン","オーストラリア"];
// この配列をループして問題を作りたい､三回に一回は問題番号が変わる､国名も変わる 剰余演算子を使う
$c = 0;
foreach ($city as $key => $value) {
  if ($key % 3 == 0) 
    echo $country[$c++] , "の首都は？<br>";
  echo "<input type='radio' name='Q$c' value='$key'> $value <br>";
}
?>


<input type="button" value="js採点" onclick="saiten()" />
<input type="submit" name="submit" value="php採点" />
</form>



<script>
function saiten(){
  var seikai=0; //正解数を入れる変数
  //答えの番号を配列に入れる
  var trueAns = new Array(0,5,8,10,14);
  //正解のラジオボタンがチェックされているか確認
  for (i=0 ; i<5 ; i++)  {
    if( document.radioB.elements[trueAns[i]].checked )
      seikai++;
  }
  
  alert("あなたは"+seikai*20+"点でした！");
}
</script>