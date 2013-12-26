<?php
  class MinorMatricesTest extends PHPUnit_Framework_TestCase{

    function setUp(){
      $this->minorMatrices = new MinorMatrices();
      $this->arrayMatrix = array(
                      array(3,2,1),
                      array(5,-5,1),
                      array(-1,1,1),
                    );

    }

    function providerDeterminant(){
      return array(
        array(
          array(array(-5,1),
          array(1,1)),-6),
        array(
          array(array(5,1),
                array(-1,1)),6)
            );
    }
    function testMinorMatricesFirstRoundWhenAddSqureMatrixThenReturn2x2SquaresMatrix(){
      $expected = array(
                    array(-5,1),
                    array(1,1)
                  );
      $actual = $this->minorMatrices->minorMatrix($this->arrayMatrix,0,0);
      $this->assertEquals($expected,$actual);
    }
    
    function testMinorMatricesSecondRoundWhenAddSqureMatrixThenReturn2x2SquaresMatrix(){
      $expected = array(
                    array(5,1),
                    array(-1,1)
                  );
      $actual = $this->minorMatrices->minorMatrix($this->arrayMatrix,0,1);
      $this->assertEquals($expected,$actual);
    }

    /**
     *@dataProvider providerDeterminant
     */
    function testMinorMatricesWhenAdd2x2SqureMatrixThenReturnExpectedDeterminant($arrayMatrix,$expected){
      $actual = $this->minorMatrices->deteminantForEachMinorMatrix($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }

    function testMinorMatricesFirstRoundWhenAdd3x3SqureMatrixThenReturnExpectedDeterminant(){
      $expected = -6;
      $actual = $this->minorMatrices->deteminantMinorMatrix($this->arrayMatrix,0,0);
      $this->assertEquals($expected,$actual);
    }
    
    function testMinorMatricesSecondRoundWhenAdd3x3SqureMatrixThenReturnExpectedDeterminant(){
      $expected = 6;
      $actual = $this->minorMatrices->deteminantMinorMatrix($this->arrayMatrix,0,1);
      $this->assertEquals($expected,$actual);
    }
  }
?>
