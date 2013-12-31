<?php
class MathMatrixTest extends PHPUnit_Framework_TestCase{
  function testMathMatrixGivenPropositionMathMatrixWhenCalculatorThenReturnExpectedResult(){
    $expected = array(6,1,3);
    $arrayMatrix = array(
                    array(3,5,-1),
                    array(2,-5,1),
                    array(1,1,1)
                  );
    $resultMatrix = array(20,10,10);

    $expectedInverse = array(
                    array(6/30,6/30,0),
                    array(1/30,-4/30,5/30),
                    array(-7/30,-2/30,25/30)
                );
    $mockInverse = $this->getMock('Inverse',array('calculatorInverse'));
    $mockInverse->expects($this->once())
      ->method('calculatorInverse')
      ->will($this->returnValue($expectedInverse));
    $mockMultipleMatrix = $this->getMock('MultipleMatrix',array('getResult'));
    $mockMultipleMatrix->expects($this->once())
      ->method('getResult')
      ->will($this->returnValue(array(6,1,3)));
    $mathMatrix = new MathMatrix();
    $mathMatrix->setInverse($mockInverse);
    $mathMatrix->setMultipleMatrix($mockMultipleMatrix);
    $actual = $mathMatrix->calculator($arrayMatrix,$resultMatrix);
    $this->assertEquals($expected,$actual);
  }

  function testMathMatrixGivenPropositionMathMatrixButNotSetInverseAndMutipleMatrixWhenCalculatorThenReturnExpectedResult(){
    $expected = array(6,1,3);
    $arrayMatrix = array(
                    array(3,5,-1),
                    array(2,-5,1),
                    array(1,1,1)
                  );
    $resultMatrix = array(20,10,10);

    $mathMatrix = new MathMatrix();
    $actual = $mathMatrix->calculator($arrayMatrix,$resultMatrix);
    $this->assertEquals($expected,$actual);
  }
} 
?>
