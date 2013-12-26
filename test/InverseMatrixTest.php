<?php
  class InverseMatrixTest extends PHPUnit_Framework_TestCase{
    function testInverseMatrixWhenAdd2x2SquaresMatrixThenReturnTransposeMatrix(){
      $matrixarray = array(
                      array(1,1),
                      array(0,0)
                    );
      $expected = array(
                    array(1,0),
                    array(1,0)
                  );
      $inverse = new InverseMatrix();
      $actual = $inverse->transpose($matrixarray);
      $this->assertEquals($expected,$actual);
    }
  }
?>
