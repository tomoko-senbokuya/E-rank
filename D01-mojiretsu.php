<?php
//  $input = "Bootstrap". PHP_EOL;
//  $int =  2 ;
 
 // Botstrap  と出力しなさい
 
 $input = "water". PHP_EOL;
 $int = 5;
// wate  上記と同じコードでwate と出力できるように
$str = str_split($input);
unset($str[$int]);
$res = rtrim( implode($str) );

echo $res;