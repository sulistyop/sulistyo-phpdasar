<?php

    function jumlah($input){
            
        $lowerCase = strtolower($input);
        $upperCase = strtoupper($input);
    
        $lowerDiff = similar_text($input, $lowerCase);
        $upperDiff = similar_text($input, $upperCase);
    
        echo $input."<br> Mengandung Huruf :";
        echo "<br>";
        echo "Besar:" . (strlen($input) - $lowerDiff); 
        echo "<br>";
        echo "Kecil:" . (strlen($input) - $upperDiff); 
    }
  
    echo jumlah("TranSISI")
    

    
?>