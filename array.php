<?php
function cari($search_value, $array, $id_path) { 
  
   // Iterating over main array 
   foreach ($array as $key1 => $val1) { 
 
       $temp_path = $id_path; 
         
       // Adding current key to search path 
       array_push($temp_path, $key1); 
 
       // Check if this value is an array 
       // with atleast one element 
       if(is_array($val1) and count($val1)) { 
 
           // Iterating over the nested array 
           foreach ($val1 as $key2 => $val2) { 
               if($val2 == $search_value) {    
                   // Adding current key to search path 
                   array_push($temp_path, $key2); 
                   return join(" --> ", $temp_path); 
               } 
           } 
       } 
         
       elseif($val1 == $search_value) { 
           return join(" --> ", $temp_path); 
       } 
   } 
     
   return null; 
} 

$arr = [
 ['f', 'g', 'h', 'i'],
 ['j', 'k', 'p', 'q'],
 ['r', 's', 't', 'u']
];

$search_path = cari('f',$arr, array('$'),true); 
  
print($search_path);



?>