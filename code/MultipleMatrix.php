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

    function setArray($arrayMatrix,$row){
      $resultArray = array($arrayMatrix[$row][0],$arrayMatrix[$row][1],$arrayMatrix[$row][2]);
      return $resultArray;
    }

    function getResult($firstArrayMatrix,$secondArrayMatrix){
      for($round=0;$round<sizeof($firstArrayMatrix);$round++){
        $firstArray = $this->setArray($firstArrayMatrix,$round);
        $resultMultipleArray = $this->multipleArray($firstArray,$secondArrayMatrix);
        $resultMultipleMatrix[$round] = $this->sumValue($resultMultipleArray);
      }
      return $resultMultipleMatrix; 
    }
  }
?>
