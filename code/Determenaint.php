<?php
  class Determenaint{
    function daigonalDown($arrayMatrix,$round){
      if( $round == 1 )
        $result = array($arrayMatrix[0][0],$arrayMatrix[1][1],$arrayMatrix[2][2]);
      if( $round == 2 )
        $result = array($arrayMatrix[0][1],$arrayMatrix[1][2],$arrayMatrix[2][0]);
      if( $round == 3 )
        $result = array($arrayMatrix[0][2],$arrayMatrix[1][0],$arrayMatrix[2][1]);
      return $result;
    }
  }
?>
