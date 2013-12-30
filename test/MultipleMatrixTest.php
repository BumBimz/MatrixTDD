<?php
class MultipleMatrixTest extends PHPUnit_Framework_TestCase{
  function setUp(){
    $this->multipleMatrix = new MultipleMatrix();
  }

  function providerMultipleArray(){
    return array(
      array(array(1,2,3),array(3,2,2),array(3,4,6)),
      array(array(3,2,1),array(3,2,2),array(9,4,2))
    );
  }
  function providerSumValue(){
    return array(
      array(array(-7,2,3),-2),
      array(array(2,3,0),5)
    );
  }

  function testMultipleGivenTwoAndNegativeThreeWhenMultipleThenReturnSix(){
    $expected = -6;
    $actual=$this->multipleMatrix->multiple(2,-3);
    $this->assertEquals($expected,$actual) ;
  }

  function testMultipleGivenNegativeTwoAndNagativeTwoWhenMultipleThenReturnFour(){
    $expected = 4;
    $actual=$this->multipleMatrix->multiple(-2,-2);
    $this->assertEquals($expected,$actual) ;
  }
  /**
  *@dataProvider providerMultipleArray
  */
  function testMultipleArrayGivenTwoArrayWhenMultipleThenReturnOneArray($firstArray,$secondArray,$expected){
    $actual = $this->multipleMatrix->multipleArray($firstArray,$secondArray);
    $this->assertEquals($expected,$actual);
  }
  /**
  *@dataProvider providerSumValue
  */
  function testMutipleArrayWhenSumArrayThenReturnExpectedResult($resultMultipleArray,$expected){
    $actual = $this->multipleMatrix->sumValue($resultMultipleArray);
    $this->assertEquals($expected,$actual);
  }
} 
?>
