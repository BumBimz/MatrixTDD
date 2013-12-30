<?php
class MultipleMatrixTest extends PHPUnit_Framework_TestCase{
  function setUp(){
    $this->multipleMatrix = new MultipleMatrix();
  }

  function providerMultipleArray(){
    return array(
      array(array(1,2,3),array(3,2,2),array(3,4,6)),
      array(array(3,2,1),array(3,2,2),array(9,4,2)),
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
  function testMultipleArrayRoundOneGivenTwoArrayWhenMultipleThenReturnOneArray($firstArray,$secondArray,$expected){
    $actual = $this->multipleMatrix->multipleArray($firstArray,$secondArray);
    $this->assertEquals($expected,$actual);
  }
} 
?>
