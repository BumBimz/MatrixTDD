<?php
  class InverseMatrix{
    function transpose($squareMatrix){
      for($i=0;$i<sizeof($squareMatrix);$i++){
        for($j=0;$j<sizeof($squareMatrix);$j++){
          $newSquareMatrix[$j][$i] = $squareMatrix[$i][$j];
        }
      }
      return $newSquareMatrix;
    } 
  }
?>
