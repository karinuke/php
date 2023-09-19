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
$result=$arr[0];
for($i=0; $i < count($arr); $i++){
    $result *= $arr[$i];
    }
return $result;
}
echo product(array(1,3,5,7,9));
echo "\n";


function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
  return $max_number;
    }if ($max_number<$a){
        $max_number=$a;
        }
}
