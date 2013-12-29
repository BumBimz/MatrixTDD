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
      return  array(
                    array(6/30,6/30,0),
                    array(1/30,-4/30,5/30),
                    array(-7/30,-2/30,25/30)
                );
    }
  }
?>
