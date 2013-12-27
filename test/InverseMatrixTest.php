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
                    array(6/30,6/30,0),
                    array(1/30,-4/30,5/30),
                    array(-7/30,-2/30,25/30)
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
                    array(0.5,-0.5,0.5),
                    array(0.5,0.5,-0.5),
                    array(-0.5,0.5,0.5)
                  );
      $actual = $inverse->inverse($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }

  }
?>
