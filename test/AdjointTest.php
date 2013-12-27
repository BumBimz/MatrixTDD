<?php
  class AdjointTest extends PHPUnit_Framework_TestCase{

    function setUp(){
      $this->adjoint = new Adjoint();
      $this->arrayMatrix = array(
                      array(3,2,1),
                      array(5,-5,1),
                      array(-1,1,1),
                    );

    }

    function providerCofactor(){
      return array(
        array(
          array(array(-5,1),
          array(1,1)),-6),
        array(
          array(array(5,1),
                array(-1,1)),6)
            );
    }

    function testAdjointMatrixWhenAdd2x2SquaresMatrixThenReturnTransposeMatrix(){
      $matrixarray = array(
                      array(1,1),
                      array(0,0)
                    );
      $expected = array(
                    array(1,0),
                    array(1,0)
                  );
      $actual = $this->adjoint->transpose($matrixarray);
      $this->assertEquals($expected,$actual);
    }

    function testAdjointMatrixWhenAdd3x3SquaresMatrixThenReturnTransposeMatrix(){
      $matrixarray = array(
                      array(1,1,1),
                      array(0,0,0),
                      array(0,0,0)
                    );
      $expected = array(
                    array(1,0,0),
                    array(1,0,0),
                    array(1,0,0)
                  );
      $actual = $this->adjoint->transpose($matrixarray);
      $this->assertEquals($expected,$actual);
    }

    function testAdjointMatrixWhenAddSquaresMatrixThenReturnTransposeMatrix(){
      $matrixarray = array(
                      array(3,5,-1),
                      array(2,-5,2),
                      array(1,3,1)
                     );
      $expected = array(
                    array(3,2,1),
                    array(5,-5,3),
                    array(-1,2,1)
                  );
      $actual = $this->adjoint->transpose($matrixarray);
      $this->assertEquals($expected,$actual);
    }

    function testAdjointFirstRoundWhenAddSqureMatrixThenReturn2x2SquaresMatrix(){
      $expected = array(
                    array(-5,1),
                    array(1,1)
                  );
      $actual = $this->adjoint->minorMatrix($this->arrayMatrix,0,0);
      $this->assertEquals($expected,$actual);
    }
    
    function testAdjointSecondRoundWhenAddSqureMatrixThenReturn2x2SquaresMatrix(){
      $expected = array(
                    array(5,1),
                    array(-1,1)
                  );
      $actual = $this->adjoint->minorMatrix($this->arrayMatrix,0,1);
      $this->assertEquals($expected,$actual);
    }

    /**
     *@dataProvider providerCofactor
     */
    function testAdjointWhenAdd2x2SqureMatrixThenReturnExpectedCofactor($arrayMatrix,$expected){
      $actual = $this->adjoint->cofactorForEachMinorMatrix($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }

    function testAdjointFirstRoundWhenAdd3x3SqureMatrixThenReturnExpectedCofactor(){
      $expected = -6;
      $actual = $this->adjoint->findCofactor($this->arrayMatrix,0,0);
      $this->assertEquals($expected,$actual);
    }
    
    function testAdjointSecondRoundWhenAdd3x3SqureMatrixThenReturnExpectedCofactor(){
      $expected = 6;
      $actual = $this->adjoint->findCofactor($this->arrayMatrix,0,1);
      $this->assertEquals($expected,$actual);
    }

    function testAdjointWhenAdd3x3SqureMatrixThenReturnExpectedMatrix(){
      $expected = array(
                    array(-6,6,0),
                    array(1,4,5),
                    array(7,-2,-25)
                  );
      $actual = $this->adjoint->adjointMatrix($this->arrayMatrix);
      $this->assertEquals($expected,$actual);
    }
    function testAdjointWhenAddNew3x3SqureMatrixThenReturnExpectedMatrix(){
      $arrayMatrix = array(
                      array(1,0,1),
                      array(1,1,0),
                      array(0,1,1)
                    );
      $expected = array(
                    array(1,1,1),
                    array(-1,1,1),
                    array(-1,-1,1)
                  );
      $actual = $this->adjoint->adjointMatrix($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }
    
    function testAdjointGivenMatrixWhenLastStepCofactorFirstRoundThenReturnExpectedMatrix(){
      $arrayMatrixInLastStep = array(
                    array(-6,6,0),
                    array(1,4,5),
                    array(7,-2,-25)
                  );
      $expected = -6;
      $acctual = $this->adjoint->addMinusInMatrix($arrayMatrixInLastStep,0,0);
      $this->assertEquals($expected,$acctual);
    }
   
  }

?>
