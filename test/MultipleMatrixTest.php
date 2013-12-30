<?php
class MultipleMatrixTest extends PHPUnit_Framework_TestCase{
  function testMultipleGivenTwoAndNegativeThreeWhenMultipleThenReturnSix(){
    $expect = -6;
    $multipleMatrix = new MultipleMatrix();
    $actual=$multipleMatrix->multiple(2,-3);
    $this->assertEquals($expect,$actual) ;
  }
} 
?>
