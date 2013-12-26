<?php
  class TransposeMatrixTest extends PHPUnit_Framework_TestCase{

    function setUp(){
      $this->transpose = new TransposeMatrix();
    }

    function testTransposeMatrixWhenAdd2x2SquaresMatrixThenReturnTransposeMatrix(){
      $matrixarray = array(
                      array(1,1),
                      array(0,0)
                    );
      $expected = array(
                    array(1,0),
                    array(1,0)
                  );
      $actual = $this->transpose->transpose($matrixarray);
      $this->assertEquals($expected,$actual);
    }

    function testTransposeMatrixWhenAdd3x3SquaresMatrixThenReturnTransposeMatrix(){
      $matrixarray = array(
                      array(1,1,1),
                      array(0,0,0),
                      array(0,0,0)
                    );
      $expected = array(
                    array(1,0,0),
                    array(1,0,0),
                    array(1,0,0)
                  );
      $actual = $this->transpose->transpose($matrixarray);
      $this->assertEquals($expected,$actual);
    }

    function testTransposeMatrixWhenAddSquaresMatrixThenReturnTransposeMatrix(){
      $matrixarray = array(
                      array(3,5,-1),
                      array(2,-5,2),
                      array(1,3,1)
                     );
      $expected = array(
                    array(3,2,1),
                    array(5,-5,3),
                    array(-1,2,1)
                  );
      $actual = $this->transpose->transpose($matrixarray);
      $this->assertEquals($expected,$actual);
    }
  }
?>
