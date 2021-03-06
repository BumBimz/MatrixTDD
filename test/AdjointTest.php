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

    function providerAddMinusMatrix(){
      return array(
        array(-6,0,0,-6),
        array(6,0,1,-6)
      );
    }

    function testAdjointMatrixWhenAdd2x2SquaresMatrixThenReturnTransposeMatrix(){
      $arrayMatrix = array(
                      array(1,1),
                      array(0,0)
                    );
      $expected = array(
                    array(1,0),
                    array(1,0)
                  );
      $actual = $this->adjoint->transpose($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }

    function testAdjointMatrixWhenAdd3x3SquaresMatrixThenReturnTransposeMatrix(){
      $arrayMatrix = array(
                      array(1,1,1),
                      array(0,0,0),
                      array(0,0,0)
                    );
      $expected = array(
                    array(1,0,0),
                    array(1,0,0),
                    array(1,0,0)
                  );
      $actual = $this->adjoint->transpose($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }

    function testAdjointMatrixWhenAddSquaresMatrixThenReturnTransposeMatrix(){
      $arrayMatrix = array(
                      array(3,5,-1),
                      array(2,-5,2),
                      array(1,3,1)
                     );
      $expected = array(
                    array(3,2,1),
                    array(5,-5,3),
                    array(-1,2,1)
                  );
      $actual = $this->adjoint->transpose($arrayMatrix);
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
      $actual = $this->adjoint->changeCofactorMatrix($this->arrayMatrix);
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
      $actual = $this->adjoint->changeCofactorMatrix($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }

    /**
     * @dataProvider providerAddMinusMatrix
     */
    function testAdjointGivenMatrixWhenLastStepCofactorFirstRoundThenReturnExpectedMatrix($cofactorXY,$x,$y,$expected){
      $acctual = $this->adjoint->addMinusInMatrix($cofactorXY,$x,$y);
      $this->assertEquals($expected,$acctual);
    }

    function testAdjointGivenMatrixWhenLastStepCofactorFirstMatrixThenReturnExpectedMatrix(){
      $arrayMatrix = array(
                    array(-6,6,0),
                    array(1,4,5),
                    array(7,-2,-25)
                  );
      $expected = array(
                    array(-6,-6,0),
                    array(-1,4,-5),
                    array(7,2,-25)
                  );
      $actual = $this->adjoint->lastStep($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }

    function testAdjointGivenMatrixWhenLastStepCofactorSecondMatrixThenReturnExpectedMatrix(){
      $arrayMatrix = array(
                    array(1,1,1),
                    array(-1,1,1),
                    array(-1,-1,1)
                  );
      $expected = array(
                    array(1,-1,1),
                    array(1,1,-1),
                    array(-1,1,1)
                  );
      $actual = $this->adjoint->lastStep($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }

    function testAdjointGivenFirstMatrixWhenFirstStepThenReturnExpectedMatrix(){
      $arrayMatrix = array(
                      array(3,5,-1),
                      array(2,-5,1),
                      array(1,1,1)
                     );
      $expected = array(
                    array(-6,6,0),
                    array(1,4,5),
                    array(7,-2,-25)
                  );
      $actual = $this->adjoint->firstStep($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }
    function testAdjointGivenSecondMatrixWhenFirstStepThenReturnExpectedMatrix(){
      $arrayMatrix = array(
                      array(1,1,0),
                      array(0,1,1),
                      array(1,0,1)
                     );
      $expected = array(
                    array(1,1,1),
                    array(-1,1,1),
                    array(-1,-1,1)
                  );
      $actual = $this->adjoint->firstStep($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }

    function testAdjointGivenFirstMatrixWhenAdjointThenReturnExpectedMatrix(){
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
      $actual = $this->adjoint->adjointMatrix($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }
    function testAdjointGivenSecondMatrixWhenAdjointThenReturnExpectedMatrix(){
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
      $actual = $this->adjoint->adjointMatrix($arrayMatrix);
      $this->assertEquals($expected,$actual);
    }
  }
?>
