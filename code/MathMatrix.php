<?php
class MathMatrix{
    private $inverse;
    private $multipleMatrix;
    function setInverse($inverse){
      $this->inverse = $inverse;
    }

    function setMultipleMatrix($multipleMatrix){
      $this->multipleMatrix = $multipleMatrix;
    }

    function calculator($arrayMatrix,$resultMatrix){
      $inverseMatrix = $this->inverse->calculatorInverse($arrayMatrix);
      $resultMathMatrix = $this->multipleMatrix->getResult($inverseMatrix,$resultMatrix);
      return $resultMathMatrix;
    }
  }
?>
