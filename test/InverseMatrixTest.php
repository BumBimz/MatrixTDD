<?php
  class InverseMatrixTest extends PHPUnit_Framework_TestCase{
    function testInverseMatrixGivenFirstMatrixWhenInverseMatrixThenReturnInverseMatrix(){
      $expected = array(
                    array(6/30,6/30,0),
                    array(1/30,-4/30,5/30),
                    array(-7/30,-2/30,25/30)
                );
      $arrayMatrix = array(
                      array(3,5,-1),
                      array(2,-5,1),
                      array(1,1,1)
                   );
      $mockResultAdjoint = array(
                            array(-6,-6,0),
                            array(-1,4,-5),
                            array(7,2,-25)
                         );

      $mockDeterminant = $this->getMock('Determinant',array('calculatorDeterminant'));
      $mockDeterminant->expects($this->once())
        ->method('calculatorDeterminant')
        ->will($this->returnValue('-30'));
      $mockAdjoint = $this->getMock('Adjoint',array('adjointMatrix'));
      $mockAdjoint->expects($this->once())
        ->method('adjointMatrix')
        ->will($this->returnValue($mockResultAdjoint));

      $inverse = new InverseMatrix();
      $inverse->setDeterminant($mockDeterminant);
      $inverse->setAdjoint($mockAdjoint);
      $actual = $inverse->calculatorInverse($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }
    
    function testInverseMatrixGivenSecondMatrixWhenInverseMatrixThenReturnInverseMatrix(){
      $expected = array(
                    array(1/2,-1/2,1/2),
                    array(1/2,1/2,-1/2),
                    array(-1/2,1/2,1/2)
                  );
      $arrayMatrix = array(
                      array(1,101),
                      array(0,1,1),
                      array(1,0,1)
                   );
      $mockResultAdjoint = array(
                            array(1,-1,1),
                            array(1,1,-1),
                            array(-1,1,1)
                         );

      $mockDeterminant = $this->getMock('Determinant',array('calculatorDeterminant'));
      $mockDeterminant->expects($this->once())
        ->method('calculatorDeterminant')
        ->will($this->returnValue('2'));
      $mockAdjoint = $this->getMock('Adjoint',array('adjointMatrix'));
      $mockAdjoint->expects($this->once())
        ->method('adjointMatrix')
        ->will($this->returnValue($mockResultAdjoint));

      $inverse = new InverseMatrix();
      $inverse->setDeterminant($mockDeterminant);
      $inverse->setAdjoint($mockAdjoint);
      $actual = $inverse->calculatorInverse($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }
  }
?>
