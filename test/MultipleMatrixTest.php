<?php
class MultipleMatrixTest extends PHPUnit_Framework_TestCase{
  function setUp(){
    $this->multipleMatrix = new MultipleMatrix();
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

  function testMultipleGivenTwoArrayWhenMultipleThenReturnOneArray(){
    $expected =array(3,4,6);
    $firstArray = array(1,2,3);
    $secondArray = array(3,2,2);
    $actual = $this->multipleMatrix->multipleArray($firstArray,$secondArray);
    $this->assertEquals($expected,$actual);
  }
} 
?>
