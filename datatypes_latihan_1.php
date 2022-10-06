<?php
//const phi
define("phi",3.14);
echo "++++++++++program menghitung bangun ruang++++++++++\n";
// menghitung sisi miring c=sqrt a-b
$sisimiring = 10;
$lebarsisi = 6;
$tinggilimas = sqrt($sisimiring-$lebarsisi);
echo "tinggi limas =" .round($tinggilimas,1). "m\n";

//menghitung volume limas segi empat 1/3 a*t
$sisi = 12;
$volumelimas = (pow($sisi, 2)*$tinggilimas)/3;
echo "volumelimas = " .round($volumelimas,1). "m3\n";

//menghitung luas lingkaran hilang 
$r = 5.5;
$luaslingkaran = phi*pow($r,2);
echo "luaslingkaran = " .round($luaslingkaran, 1). "m2\n";

//volume tabung
$tinggitabung = 8;
$voltabung = $luaslingkaran*$tinggitabung;
echo "volume tabung = " .round($voltabung, 1). "m3\n";

//luas lingkaran konversi ke m3
$luaslingkaranhilang = $luaslingkaran/100;
echo "luaslingkaranhilang = " .round($luaslingkaranhilang, 1). " m3\n";

//volume bangun ruang
$totalbangunruang = $voltabung+$volumelimas-$luaslingkaranhilang;
echo "volume bangun ruang = " .round($totalbangunruang, 2). " m3 \n" ;
echo "++++++++++##############++++++++++++++";
?>