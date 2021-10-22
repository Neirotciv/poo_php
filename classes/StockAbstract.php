<?php
abstract class StockAbstract {
    abstract protected function readRow($row);
    abstract protected function readCell($row, $col);
    abstract protected function create($obj);
    abstract protected function remove($id);
    abstract protected function update($id, $obj);
}