<?php
  class InverseMatrix{
  
    function transpose($squareMatrix){
      $this->squareMatrix=$squareMatrix;
      $lenghtOfarray = sizeof($squareMatrix);
      for($i=0;$i<$lenghtOfarray-1;$i++){
        for($j=$i+1;$j<$lenghtOfarray;$j++){
          $this->swap($i,$j);
        }
      }
      return $this->squareMatrix;
    }

    function swap($n,$m){
      $temp = $this->squareMatrix[$n][$m]; 
      $this->squareMatrix[$n][$m] = $this->squareMatrix[$m][$n];
      $this->squareMatrix[$m][$n] = $temp;
    } 
  }
?>
