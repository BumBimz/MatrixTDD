<?php
  class DetermenaintTest extends PHPUnit_Framework_TestCase{

    function setUp(){
      $this->determenaint = new Determenaint();
      $this->arrayMatrix = array(
        array(3,5,-1),
        array(2,-5,1),
        array(1,1,1),
      );
    }

    function testDaigonalGivenSqualMatrixWhenFirstRoundThenReturnThreeAndNegativeFiveAndOne(){
      $expect = array(3,-5,1);
      $actual = $this->determenaint->daigonalDown($this->arrayMatrix,1);
      $this->assertEquals($expect,$actual);
    }

    function testDaigonalGivenSqualMatrixWhenSecondRoundThenReturnFiveAndOneAndOne(){
      $expect = array(5,1,1);
      $actual = $this->determenaint->daigonalDown($this->arrayMatrix,2);
      $this->assertEquals($expect,$actual);
    }
    function testDaigonalGivenSqualMatrixWhenThirdRoundThenReturnNagativeOneAndTwoAndOne(){
      $expect = array(-1,2,1);
      $actual = $this->determenaint->daigonalDown($this->arrayMatrix,3);
      $this->assertEquals($expect,$actual);
    }
  }
?>
