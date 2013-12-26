<?php
class MinorMatricesTest extends PHPUnit_Framework_TestCase{

  function setUp(){
    $this->minorMatrices = new MinorMatrices();
    $this->arraymatrix = array(
                      array(3,2,1),
                      array(5,-5,1),
                      array(-1,1,1),
                    );

    }
    function testMinorMatricesFirstRoundWhenAddSqureMatrixThenReturn2x2SquaresMatrix(){
      $expected = array(
                    array(-5,1),
                    array(1,1)
                  );
      $actual = $this->minorMatrices->minorMatrix($this->arraymatrix,0,0);
      $this->assertEquals($expected,$actual);
    }
    
    function testMinorMatricesSecondRoundWhenAddSqureMatrixThenReturn2x2SquaresMatrix(){
      $expected = array(
                    array(5,1),
                    array(-1,1)
                  );
      $actual = $this->minorMatrices->minorMatrix($this->arraymatrix,0,1);
      $this->assertEquals($expected,$actual);
    }
  } 
?>
