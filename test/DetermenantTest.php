<?php
  class DetermenantTest extends PHPUnit_Framework_TestCase{

    function setUp(){
      $this->determenant = new Determenant();
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

    function providerLastStep(){
      return array(
        array(array(-15,5,-2,5,3,10),-30),
        array(array(1,1,0,0,0,0),2),
      );
    }

    function providerSecondStep(){
      return array(
        array(array(
        array(3,-5,1),
        array(5,1,1),
        array(-1,2,1),
        array(1,-5,-1),
        array(1,1,3),
        array(1,2,5),
      ),array(-15,5,-2,5,3,10),),
        array(array(
        array(1,1,1),
        array(1,1,1),
        array(0,0,0),
        array(1,1,0),
        array(0,1,1),
        array(1,0,1),
      ),array(1,1,0,0,0,0),),
      );
    }

    function providerFirstStep(){
      return array(
        array(array(
          array(3,5,-1),
          array(2,-5,1),
          array(1,1,1),),
        array(
          array(3,-5,1),
          array(5,1,1),
          array(-1,2,1),
          array(1,-5,-1),
          array(1,1,3),
          array(1,2,5),
      ),),
        array(array(
          array(1,1,0),
          array(0,1,1),
          array(1,0,1),),
        array(
          array(1,1,1),
          array(1,1,1),
          array(0,0,0),
          array(1,1,0),
          array(0,1,1),
          array(1,0,1),
      ),),
      );
    }

    function providerCalculator(){
      return array(
        array(array(
          array(3,5,-1),
          array(2,-5,1),
          array(1,1,1),),-30),
        array(array(
          array(1,1,0),
          array(0,1,1),
          array(1,0,1),),2,)
      );
    }

    /**
     * @dataProvider providerDaigonal
     */
    function testDaigonalGivenSqualMatrixWhenAnyRoundThenReturnExpected($round,$expectedDown,$expectedUp){
      $arrayMatrix = array(
        array(3,5,-1),
        array(2,-5,1),
        array(1,1,1),
      );
      $actualDown = $this->determenant->daigonalDown($arrayMatrix,$round);
      $actualUp = $this->determenant->daigonalUp($arrayMatrix,$round);
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

    /**
     * @dataProvider providerLastStep
     */
    function testLastStepWhenAddMultipleDaigonalThenReturnExpected($multipleDaigonal,$expected){
      $actual = $this->determenant->lastStep($multipleDaigonal);
      $this->assertEquals($expected,$actual);
    }

    /**
     * @dataProvider providerSecondStep
     */
    function testSecondStepWhenAddArrayDaigonalThenReturnMultipleDaigonalExpected($daigonal,$expected){
      $actual = $this->determenant->secondStep($daigonal);
      $this->assertEquals($expected,$actual);
    }

    /**
     * @dataProvider providerFirstStep
     */
    function testFirstStepWhenAddMatrixThenReturnDaigonalExpected($arrayMatrix,$expected){
      $actual = $this->determenant->firstStep($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }

    /**
     * @dataProvider providerCalculator
     */
    function testCalculateDetermenantWhenAddMatrixThenReturnDeterminantExpected($arrayMatrix,$expected){
      $actual = $this->determenant->calculatorDetermenain($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }

  }
?>
