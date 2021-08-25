<?php
$name = 'kota';
if ($name = 'kota') {
    echo "私はkotaです";
}
  else {"kotaではありません";
}
echo "\n";
$total = 0;
for($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;
echo "\n";
$fruits = array("apple", "orange", "lemon", "grape", "melon");
foreach($fruits as $fruits){
    echo " " . $fruits;
    echo "\n";
  }
  echo "\n";
  $start = 1;
  $end = 100;

for($i = $start; $i < $end; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n"; }
}
?>
