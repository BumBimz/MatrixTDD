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

    function providerDaigonal(){
      return array(
        array(1,array(3,-5,1),array(1,-5,-1)),
        array(2,array(5,1,1),array(1,1,3)),
        array(3,array(-1,2,1),array(1,2,5)),
      );
    }

    function providerMutiple(){
      return array(
        array(array(3,-5,1),-15),
        array(array(5,1,1),5),
        array(array(-1,2,1),-2),
        array(array(1,2,5),10),
      );
    }

    function providerPositive(){
      return array(
        array(-15,5,-2,-12),
        array(5,3,10,18),
        array(1,1,0,2),
      );
    }

    function providerMinus(){
      return array(
        array(-12,18,-30),
        array(2,0,2),
        array(9,-6,15),
      );
    }

    /**
     * @dataProvider providerDaigonal
     */
    function testDaigonalGivenSqualMatrixWhenAnyRoundThenReturnExpected($round,$expectedDown,$expectedUp){
      $actualDown = $this->determenant->daigonalDown($this->arrayMatrix,$round);
      $actualUp = $this->determenant->daigonalUp($this->arrayMatrix,$round);
      $this->assertEquals($expectedDown,$actualDown);
      $this->assertEquals($expectedUp,$actualUp);
    }

    /**
     * @dataProvider providerMutiple
     */
    function testMultipleDaigonalGivenValueOfDaigonalWhenCalculatorThenResltExpected($valueOfDaigonal,$expected){
      $actual = $this->determenant->multipleDaigonal($valueOfDaigonal);
      $this->assertEquals($expected,$actual);
    }

    /**
     * @dataProvider providerPositive
     */
    function testPositiveValueOfDaigonalWhenCalculatorThenResultExpectd($firstValue,$secondValue,$thirdValue,$expected){
      $actual = $this->determenant->positive($firstValue,$secondValue,$thirdValue);
      $this->assertEquals($expected,$actual);
    }

    /**
     * @dataProvider providerMinus
     */
    function testCalculateMinusWhenAfterCalculatePositiveDaigonalThenreturnExpected($firstValue,$secondValue,$expected){
      $actual = $this->determenant->minus($firstValue,$secondValue);
      $this->assertEquals($expected,$actual);
    }

  }
?>
