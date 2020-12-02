<?php 
$arr = [
    ['f', 'g', 'h', 'i'],
    ['j', 'k', 'p', 'q'],
    ['r', 's', 't', 'u']
   ];
$arrMobil = array ("Kijang","Pajero","Inova","Karimun","Mobilio");
echo "<b>Pencarian Array dengan in_array";
echo " <pre>";
print_r($arr);
echo " </pre>";
 
if (in_array("fgh",$arr) ) {
echo "Stok Mobil Karimun masih ada di showroom<br>";
} else {
echo "Mobil sudah terjual";
}
?>