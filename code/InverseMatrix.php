<?php
class InverseMatrix{
  private $determinant;
  private $adjoint;

    function setDeterminant($determinant = NULL){
      $this->determinant = $determinant ?:new Determinant;
    }

    function setAdjoint($adjoint = NULL){
      $this->adjoint = $adjoint?:new Adjoint;
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
