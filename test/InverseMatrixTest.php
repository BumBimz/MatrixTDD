<?php
  class InverseMatrixTest extends PHPUnit_Framework_TestCase{
    function testInverseMatrixGivenSquareMatrixWhenInverseMatrixThenReturnInverseMatrix(){
      $inverse = new InverseMatrix();
      $arrayMatrix = array(
                      array(3,5,-1),
                      array(2,-5,1),
                      array(1,1,1)
                    );
      $expected = array(
                    array(-6,-6,0),
                    array(-1,4,-5),
                    array(7,2,-25)
                  );
      $actual = $inverse->inverse($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }
  }
?>
