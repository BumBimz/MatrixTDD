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
      $sizeOfMatrix = sizeof($resultAdjoint);
      for($row=0;$row<$sizeOfMatrix;$row++){
        for($column=0;$column<$sizeOfMatrix;$column++){
          $resultInverseMatrix[$row][$column]=$resultAdjoint[$row][$column]/$resultDeterminant;
        }
      }
      return $resultInverseMatrix;
    }
  }
?>
