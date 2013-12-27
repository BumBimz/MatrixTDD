<?php
  class Adjoint{

    function transpose($squareMatrix){
      $this->squareMatrix=$squareMatrix;
      $lenghtOfarray = sizeof($squareMatrix);
      for($i=0;$i<$lenghtOfarray-1;$i++){
        for($j=$i+1;$j<$lenghtOfarray;$j++){
          $this->swap($i,$j);
        }
      }
      return $this->squareMatrix;
    }

    function swap($n,$m){
      $temp = $this->squareMatrix[$n][$m]; 
      $this->squareMatrix[$n][$m] = $this->squareMatrix[$m][$n];
      $this->squareMatrix[$m][$n] = $temp;
    }

    function minorMatrix($arrayMatrix,$rowMatrix,$columnMatrix){
      $this->arrayMatrix = $arrayMatrix;
      $this->rowMatrix = $rowMatrix;
      $this->columnMatrix = $columnMatrix;
      $this->minorMatrixAxisX();
      return $this->newArray;
    }

    function minorMatrixAxisX(){
      $this->sizeOfMatrix = sizeof($this->arrayMatrix);
      $this->positionAxisX = 0;
      for($row=0;$row<$this->sizeOfMatrix;$row++){
        if($row!=$this->rowMatrix){
          $this->minorMatrixAxisY($row);
          $this->positionAxisX++;
        }
      }
    }

    function minorMatrixAxisY($row){
      $positionAxisY=0;
      for($column=0;$column<$this->sizeOfMatrix;$column++){
        if($column!=$this->columnMatrix){
          $this->newArray[$this->positionAxisX][$positionAxisY]=$this->arrayMatrix[$row][$column];
          $positionAxisY++;
        }
      }
    }

    function cofactorForEachMinorMatrix($arrayMatrix){
      $firstDaigonal = $arrayMatrix[0][0]*$arrayMatrix[1][1];
      $secondDaigonal = $arrayMatrix[0][1]*$arrayMatrix[1][0];
      $determinant = $firstDaigonal-$secondDaigonal;
      return $determinant;
    }

    function findCofactor($arrayMatrix,$rowMatrix,$columnMatrix){
      $newMatrix = $this->minorMatrix($arrayMatrix,$rowMatrix,$columnMatrix);
      $determinant = $this->cofactorForEachMinorMatrix($newMatrix);
      return $determinant;
    }

    function adjointMatrix($arrayMatrix){
      $sizeOfMatrix = sizeof($arrayMatrix);
      for($row=0;$row<$sizeOfMatrix;$row++){
        for($column=0;$column<$sizeOfMatrix;$column++){
          $newMatrix[$row][$column] = $this->findCofactor($arrayMatrix,$row,$column);
        }
      }
      return $newMatrix;
    }
  }
?>
