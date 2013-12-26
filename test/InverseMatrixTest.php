<?php
class InverseMatrixTest extends PHPUnit_Framework_TestCase{
    function setUp(){
      $this->inverse = new InverseMatrix();
    }

    function testInverseMatrixWhenAdd2x2SquaresMatrixThenReturnTransposeMatrix(){
      $matrixarray = array(
                      array(1,1),
                      array(0,0)
                    );
      $expected = array(
                    array(1,0),
                    array(1,0)
                  );
      $actual = $this->inverse->transpose($matrixarray);
      $this->assertEquals($expected,$actual);
    }

    function testInverseMatrixWhenAdd3x3SquaresMatrixThenReturnTransposeMatrix(){
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
      $actual = $this->inverse->transpose($matrixarray);
      $this->assertEquals($expected,$actual);
    }
  }
?>
