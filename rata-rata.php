<?php

    $nilai = array(72, 65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86);

    $jumlah = 0;

    for ($i = 0; $i <= count($nilai)-1; $i++)
    {
        $jumlah = $jumlah + $nilai[$i]; 
    } 

    $rataRata = $jumlah/count($nilai);
    $nilaiMax = max($nilai);  
    $nilaiMin = min($nilai);  


    echo "Rata-ratanya adalah : ".$rataRata."<br>";  
 
    echo "Nilai Tertinggi adalah : ".$nilaiMax."<br>";  
  
    echo "Nilai Terendah adalah : ".$nilaiMin."<br>";  
    
?>