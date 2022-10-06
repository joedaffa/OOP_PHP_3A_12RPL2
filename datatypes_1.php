<?php
// multiplication
$a = '10';
$b = 10;
$c = $a+$b;
print 'hasil a+b =' .$c."\n";

//luas lingkaran

define("pi", 3.14);
$r =10;
$luas = pi*pow($r,2);
print ('luas lingkaran dengan jari-jari '.$r.' = '.$luas."\n");

//volume tabung
$tinggi = 10;
$volume = pi*pow($r,2) * $tinggi;
print('volume tabung dengan jari-jari '.$r.' dan tinggi '.$tinggi.' = '.$volume. "\n");
?>