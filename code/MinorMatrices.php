<?php
  class MinorMatrices{
    function minorMatrix($arraymatrix,$n,$m){
      $x=0;
      for($i=0;$i<sizeof($arraymatrix);$i++){
        if($i!=$n){
          $y=0;
          for($j=0;$j<sizeof($arraymatrix);$j++){
            if($j!=$m){
              $newArray[$x][$y]=$arraymatrix[$i][$j];
              $y++;
            }
          }
          $x++;
        }
      }
      return $newArray;
    }
  }
?>
