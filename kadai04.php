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
for($i=1; $i < count($arr); $i++){
$result *= $arr[$i];
}
return $result;
}
echo product(array(1,3,5,7,9));
echo "\n";

if ($max_number<$a){
$max_number=$a;
}