<?php
  class DetermenantTest extends PHPUnit_Framework_TestCase{

    function setUp(){
      $this->determenant = new Determenant();
      $this->arrayMatrix = array(
        array(3,5,-1),
        array(2,-5,1),
        array(1,1,1),
      );
    }

    function testDaigonalDownGivenSqualMatrixWhenFirstRoundThenReturnThreeNegativeFiveAndOne(){
      $expect = array(3,-5,1);
      $actual = $this->determenant->daigonalDown($this->arrayMatrix,1);
      $this->assertEquals($expect,$actual);
    }

    function testDaigonalDownGivenSqualMatrixWhenSecondRoundThenReturnFiveOneAndOne(){
      $expect = array(5,1,1);
      $actual = $this->determenant->daigonalDown($this->arrayMatrix,2);
      $this->assertEquals($expect,$actual);
    }

    function testDaigonalDownGivenSqualMatrixWhenThirdRoundThenReturnNagativeOneTwoAndOne(){
      $expect = array(-1,2,1);
      $actual = $this->determenant->daigonalDown($this->arrayMatrix,3);
      $this->assertEquals($expect,$actual);
    }

    function testDaigonalUpGivenSqualMatrixWhenFirstRoundThenReturnOneNagativeFiveAndNegativeOne(){
      $expect = array(1,-5,-1);
      $actual = $this->determenant->daigonalUp($this->arrayMatrix,1);
      $this->assertEquals($expect,$actual);
    }

    function testDaigonalUpGivenSqualMatrixWhenSecondRoundThenReturnOneOneAndThree(){
      $expect = array(1,1,3);
      $actual = $this->determenant->daigonalUp($this->arrayMatrix,2);
      $this->assertEquals($expect,$actual);
    }

    function testDaigonalUpGivenSqualMatrixWhenThirdRoundThenReturnOneTwoAndFive(){
      $expect = array(1,2,5);
      $actual = $this->determenant->daigonalUp($this->arrayMatrix,3);
      $this->assertEquals($expect,$actual);
    }

    function testDaigonalDownGivenSqualMatrixWhenFirstRoundThenResultReturnNegativeFifteen(){
      $expect = -15;
      $value = $this->determenant->daigonalDown($this->arrayMatrix,1);
      $actual = $this->determenant->Multiple($value);
      $this->assertEquals($expect,$actual);
    }

    function testDaigonalDownGivenSqualMatrixWhenSecondRoundThenResultReturnFive(){
      $expect = 5;
      $value = $this->determenant->daigonalDown($this->arrayMatrix,2);
      $actual = $this->determenant->Multiple($value);
      $this->assertEquals($expect,$actual);
    }

    function testDaigonalUpGivenSqualMatrixWhenThirdRoundThenResultReturnTen(){
      $expect = 10;
      $value = $this->determenant->daigonalUp($this->arrayMatrix,3);
      $actual = $this->determenant->Multiple($value);
      $this->assertEquals($expect,$actual);
    }

  }
?>
