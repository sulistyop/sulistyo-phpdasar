
<?php
    // RUMUS : +1 -2 +3 ... -n
    
    //Fungsi mengenkripsikan Huruf
	function enkripsi($input){
		$word = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
	  
		$input = strtoupper($input);
		$input_array = str_split($input);

		$plus = true;
		$result = '';
		$x = 1;
		$temp = 0;
		for ($i=0; $i < count($input_array); $i++) { 
			$temp = array_search($input_array[$i], $word);
			if ($plus == true) {
				$result .= $word[$temp+$x];
				$plus = false;
			} else {
				$ne = $temp-$x;
				if ($ne < 0) {
					$ne = count($word) + ($ne);
				}
				$result .= $word[$ne];
				$plus = true;
			}
			$x++;
		}
		
	  return $result;
	}
    $text = "DFHKNQ";
    //memanggil Fungsi
	echo enkripsi($text);
  

?>