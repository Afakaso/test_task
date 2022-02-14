
<?php
function task1($num) {
    $sum = 0;
    for ($i = 0; $i < $num; $i++){
    if ($i % 3 == 0 || $i % 5 == 0) {
      $sum = $sum + $i;
    }
  }
return $sum;  
}
$res1 = task1(1000);
echo $res1; // 233168
?>