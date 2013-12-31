<?php
class MultipleMatrix{

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
      $this->firstArrayMatrix = $firstArrayMatrix;
      $this->secondArrayMatrix = $secondArrayMatrix;
      $sizeOfMatrix = sizeof($firstArrayMatrix);
      $this->processOfMultiple($sizeOfMatrix);
      return $this->resultMultipleMatrix; 
    }

    function processOfMultiple($sizeOfMatrix){
      for($round=0;$round<$sizeOfMatrix;$round++){
        $firstArray = $this->setArray($this->firstArrayMatrix,$round);
        $resultMultipleArray = $this->multipleArray($firstArray,$this->secondArrayMatrix);
        $this->resultMultipleMatrix[$round] = $this->sumValue($resultMultipleArray);
      }
    }
  }
?>
