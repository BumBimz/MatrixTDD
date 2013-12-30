<?php
  class MultipleMatrix{
    function multiple($firstValue,$secondValue){
      return $firstValue*$secondValue;
    } 

    function multipleArray($firstArray,$secondArray){
      $sizeOfArray=sizeof($firstArray);
      for($position=0;$position<$sizeOfArray;$position++)
        $resultMultipleArray[$position] = $firstArray[$position]*$secondArray[$position];
      return $resultMultipleArray;
    }

    function sumValue($resultMultipleArray){
      $resultValue = $resultMultipleArray[0]+$resultMultipleArray[1]+$resultMultipleArray[2]; 
      return $resultValue;
    }
  }
?>
