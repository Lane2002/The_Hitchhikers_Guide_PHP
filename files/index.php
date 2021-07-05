<?php
$initial = '555';

function a_lot_of_math($num) {
  $a = octdec($num);
  $b = deg2rad($a); 
  $c = cos ($b);
  $d = round($c, 3);
  $e = log($d);
  $f = abs($e);
  $g = acos($f);
  $h = rad2deg($g);
  $i = floor($h);
  $j = $i - 47;
  return  $a . "\n" . $b . "\n" . $c . "\n" . $d . "\n" . $e . "\n" . $f . "\n" . $g . "\n" . $h . "\n" . $i . "\n" . $j . "\n";
}
echo a_lot_of_math($initial);