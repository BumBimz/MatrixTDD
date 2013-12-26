<?php
  class MinorMatrices{
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

    function deteminantForEachMinorMatrix($arrayMatrix){
      $firstDaigonal = $arrayMatrix[0][0]*$arrayMatrix[1][1];
      $secondDaigonal = $arrayMatrix[0][1]*$arrayMatrix[1][0];
      $determinant = $firstDaigonal-$secondDaigonal;
      return $determinant;
    }

    function deteminantMinorMatrix($arrayMatrix,$rowMatrix,$columnMatrix){
      $newMatrix = $this->minorMatrix($arrayMatrix,$rowMatrix,$columnMatrix);
      $determinant = $this->deteminantForEachMinorMatrix($newMatrix);
      return $determinant;
    }

    function findDeterminant($arrayMatrix){
      for($i=0;$i<sizeof($arrayMatrix);$i++){
        for($j=0;$j<sizeof($arrayMatrix);$j++){
          $newMatrix[$i][$j] = $this->deteminantMinorMatrix($arrayMatrix,$i,$j);
        }
      }
      return $newMatrix;
    }
  }
?>
