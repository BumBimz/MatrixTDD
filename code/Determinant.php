<?php
  class Determinant{
    function daigonalDown($arrayMatrix,$round){
      switch($round){
      case 1:
        $result = array($arrayMatrix[0][0],$arrayMatrix[1][1],$arrayMatrix[2][2]);
        break;
      case 2:
        $result = array($arrayMatrix[0][1],$arrayMatrix[1][2],$arrayMatrix[2][0]);
        break;
      case 3:
        $result = array($arrayMatrix[0][2],$arrayMatrix[1][0],$arrayMatrix[2][1]);
        break;
      }
      return $result;
    }

    function daigonalUp($arrayMatrix,$round){
      switch($round){
      case 1 : 
        $result = array($arrayMatrix[2][0],$arrayMatrix[1][1],$arrayMatrix[0][2]);
        break;
      case 2 :
        $result = array($arrayMatrix[2][1],$arrayMatrix[1][2],$arrayMatrix[0][0]);
        break;
      case 3 :
        $result = array($arrayMatrix[2][2],$arrayMatrix[1][0],$arrayMatrix[0][1]);
        break;
      }
      return $result;
    }

    function multipleDaigonal($variable){
      $result = $variable[0]*$variable[1]*$variable[2];
      return $result;
    }

    function positive($firstValue,$secondValue,$thirdValue){
      $result = $firstValue+$secondValue+$thirdValue;
      return $result;
    }

    function minus($firstValue,$secondValue){
      return $firstValue-$secondValue;
    }

    function lastStep($multipledaigonal){
      $positiveDaigonalDown = $this->positive($multipledaigonal[0],$multipledaigonal[1],$multipledaigonal[2]);
      $positiveDaigonalUp = $this->positive($multipledaigonal[3],$multipledaigonal[4],$multipledaigonal[5]);
      $result = $this->minus($positiveDaigonalDown,$positiveDaigonalUp);
      return $result;
    }

    function secondStep($daigonal){
      for($round=0;$round<6;$round++)
        $result[$round]= $this->multipleDaigonal($daigonal[$round]);
      return $result;
    }

    function firstStep($arrayMatrix){
      for($round=1;$round<=3;$round++){
        $positionDown = $round-1;
        $positionUp = $round+2;
        $result[$positionDown]=$this->daigonalDown($arrayMatrix,$round);
        $result[$positionUp]=$this->daigonalUp($arrayMatrix,$round);
      }
      return $result;
    }

    function calculatorDeterminant($arrayMatrix){
      $firstStep = $this->firstStep($arrayMatrix);
      $secondStep = $this->secondStep($firstStep);
      $result = $this->lastStep($secondStep);
      return $result;
    }
  }
?>
