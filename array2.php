<?php

$arr = [
    ['f', 'g', 'h', 'i'],
    ['j', 'k', 'p', 'q'],
    ['r', 's', 't', 'u']
   ];

$cari = 'f';

if(in_array($cari, $arr)){
    echo 'true';
}
else{
    echo 'false';
}

?>