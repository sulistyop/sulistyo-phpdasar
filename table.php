<?php
  function stylingTd($input){
    $style['black']  = [1,2,5,7,10,11];
    $style['white'] = [3,4,6,8,9,12];
    if (in_array($input, $style['black'])) {
      return 'style="background:black; color:white;"';
    } else {
      return 'style="background : white"';
    }
  } 
  $number = 1;
  $x = 1;

  echo "<table style='border-collapse: collapse;text-align:center'>";
  for($i = 0; $i < 8; $i++){
   echo '<tr>';
    for($j = 0; $j < 8; $j++){
      echo '<td '.stylingTd($x).'>';
      echo $number++;
      echo '</td>';
      if ($x==12) {
        $x = 1;
      } else {
        $x++;
      }
    }
   echo '</tr>';
  }
  echo "</table>";

?>