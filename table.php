<?php
 $pkk = array(
    'kd_barang' =>array(1, 2, 3),
    'nama_barang' =>array('Donat','piscok','milktea'),
    'harga' =>array('1.500', '2.000', '6.000'),
 );
 echo "kd_barang || nama_barang || harga \n";
echo $pkk['kd_barang'][0], "|| ", $pkk['nama_barang'][0], "||", $pkk['harga'][0], "\n";
echo $pkk['kd_barang'][1], "|| ", $pkk['nama_barang'][1], "||", $pkk['harga'][1], "\n";
echo $pkk['kd_barang'][2], "|| ", $pkk['nama_barang'][2], "||", $pkk['harga'][2], "\n";
?>