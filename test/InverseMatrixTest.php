<?php
  class InverseMatrixTest extends PHPUnit_Framework_TestCase{
    function testInverseMatrixGivenFirstMatrixWhenInverseMatrixThenReturnInverseMatrix(){
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

    function testInverseMatrixGivenSecondMatrixWhenInverseMatrixThenReturnInverseMatrix(){
      $inverse = new InverseMatrix();
      $arrayMatrix = array(
                      array(1,1,0),
                      array(0,1,1),
                      array(1,0,1)
                    );
      $expected = array(
                    array(1,-1,1),
                    array(1,1,-1),
                    array(-1,1,1)
                  );
      $actual = $inverse->inverse($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }

  }
?>
