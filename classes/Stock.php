<?php
include_once("../classes/StockAbstract.php");

class Stock extends StockAbstract {
    private $file;
    private $data = [];
    private $filename;

    public function __construct($table) {
        $this->filename = "../data/" . $table;
        $this->file = fopen("../data/" . $table, "r+");

        while (($row = fgetcsv($this->file)) !== FALSE) {
            array_push($this->data, $row);
        }
    }

    public function readAll() {
        return $this->$data;
    }

    public function readRow($row) {
        return $this->$data[$row];
    }

    public function readCell($row, $col) {
        return $this->$data[$row][$col];
    }

    public function create($obj) {
        array_push($this->data, $obj);
        fputcsv($this->file, $obj);
    }

    public function remove($row) {
        unset($this->$data[$row]);

        unlink($this->file);
        $this->file = fopen($this->filename, "w+");
        foreach($this->data as $row) {
            fputcsv($this->file, $row);
        }
    }

    public function update($row, $obj) {
        $this->remove($row);
        $this->create($obj);
    }
}