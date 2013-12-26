<?php
  class MinorMatricesTest extends PHPUnit_Framework_TestCase{
    function testMinorMatricesFirstRoundWhenAddSqureMatrixThenReturn2x2SquaresMatrix(){
      $arraymatrix = array(
                      array(3,2,1),
                      array(5,-5,1),
                      array(-1,1,1),
                    );
      $expected = array(
                    array(-5,1),
                    array(1,1)
                  );
      $minorMatrices = new MinorMatrices();
      $actual = $minorMatrices->minorMatrix($arraymatrix,0,0);
      $this->assertEquals($expected,$actual);
    }
    
    function testMinorMatricesSecondRoundWhenAddSqureMatrixThenReturn2x2SquaresMatrix(){
      $arraymatrix = array(
                      array(3,2,1),
                      array(5,-5,1),
                      array(-1,1,1),
                    );
      $expected = array(
                    array(5,1),
                    array(-1,1)
                  );
      $minorMatrices = new MinorMatrices();
      $actual = $minorMatrices->minorMatrix($arraymatrix,0,1);
      $this->assertEquals($expected,$actual);
    }
  } 
?>
