<?php
  class MultipleMatrix{
    function multiple($firstValue,$secondValue){
      return $firstValue*$secondValue;
    } 

    function multipleArray($firstArray,$secondArray){
      for($i=0;$i<sizeof($firstArray);$i++)
        $resultMultipleArray[$i] = $firstArray[$i]*$secondArray[$i];
      return $resultMultipleArray;
    }
  }
?>
