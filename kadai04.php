<?php
function times2($value){
$result=$value*2;
return $result;
}
echo "\n";

function add($a, $b){
$result=$a+$b;
return $result;
}
echo "\n";

function product($arr){
  $result = 1; //かけざん
  for($i=0; $i < count($arr); $i++){
    //$result *= $arr[$i];
    $result = $result * $arr[$i];
  }
  return $result;
}
echo product(array(9,3,5,7,1));
echo "\n";
//foreach($arr as $a){$result = $result * $a の方がわかりやすい。

function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    if ($max_number<$a){
      $max_number=$a;
    }
  }
  return $max_number;
}
