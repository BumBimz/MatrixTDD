<?php
  class Determenant{
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

    function Multiple($value){
      $result = $value[0]*$value[1]*$value[2];
      return $result;
    }
  }
?>
