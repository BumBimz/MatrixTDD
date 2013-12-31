<?php
class MathMatrix{
    private $inverse;
    private $multipleMatrix;

    function setInverse($inverse = NULL){
      $this->inverse = $inverse;
    }

    function setMultipleMatrix($multipleMatrix = NULL){
      $this->multipleMatrix = $multipleMatrix;
    }

    function calculator($arrayMatrix,$resultMatrix){
      $this->inverse?:$this->inverse = new InverseMatrix;
      $this->multipleMatrix?:$this->multipleMatrix = new MultipleMatrix;
      $inverseMatrix = $this->inverse->calculatorInverse($arrayMatrix);
      $resultMathMatrix = $this->multipleMatrix->getResult($inverseMatrix,$resultMatrix);
      return $resultMathMatrix;
    }
  }
?>
