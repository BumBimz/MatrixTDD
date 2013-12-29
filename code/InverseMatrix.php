<?php
class InverseMatrix{
  private $determinant;
  private $adjoint;

    function setDeterminant($determinant){
      $this->determinant = $determinant;
    }

    function setAdjoint($adjoint){
      $this->adjoint = $adjoint;
    }

    function calculatorInverse($arrayMatrix){
      $resultDeterminant = $this->determinant->calculatorDeterminant($arrayMatrix);
      $resultAdjoint = $this->adjoint->adjointMatrix($arrayMatrix);
      for($i=0;$i<sizeof($resultAdjoint);$i++){
        for($j=0;$j<sizeof($resultAdjoint);$j++){
          $resultInverseMatrix[$i][$j]=$resultAdjoint[$i][$j]/$resultDeterminant;
        }
      }
      return $resultInverseMatrix;
    }
  }
?>
