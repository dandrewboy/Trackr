<?php


class ErrorType {
    public $id;
    public $name;

    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }
}