<?php
$name="カリン";
if($name=="カリン"){
    echo "私はカリンです";
} else {
    echo "あなたの名前ではありません";
}
echo "\n";

//問題２
$total=0;
for($i=0; $i <= 10000; $i++){
    $total += $i;
    //$total = $total + $i;
}
echo $total;
echo "\n";

$fruits=array("apple", "banana", "orange", "grape", "strawberry");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}
echo "\n";

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
echo "\n";