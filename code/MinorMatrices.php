<?php
  class MinorMatrices{
    function minorMatrix($arrayMatrix,$rowMartrix,$columnMartrix){
      $this->arrayMatrix = $arrayMatrix;
      $this->sizeOfMatrix = sizeof($arrayMatrix);
      $this->positionAxisX = 0;
      $this->columnMartrix = $columnMartrix;
      for($row=0;$row<$this->sizeOfMatrix;$row++){
        if($row!=$rowMartrix){
          $this->minorMatrixAxisY($row);
          $this->positionAxisX++;
        }
      }
      return $this->newArray;
    }

    function minorMatrixAxisY($row){
      $positionAxisY=0;
      for($column=0;$column<$this->sizeOfMatrix;$column++){
        if($column!=$this->columnMartrix){
          $this->newArray[$this->positionAxisX][$positionAxisY]=$this->arrayMatrix[$row][$column];
          $positionAxisY++;
        }
      }
    }
  }
?>
