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

    function sum($resultMultipleArray){
      return $resultMultipleArray[0]+$resultMultipleArray[1]+$resultMultipleArray[2]; 
    }
  }
?>
