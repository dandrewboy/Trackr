<?php


class Incident {
    public $id;
    public $date;
    public $details;
    public $customer;
    public $system;
    public $errorType;
    public $misfire;
    public $release;
    public $shortCircuit;

    function __construct($id, $date, $details, $customer, $system, $errorType, $misfire, $release, $shortCircuit) {
        $this->id = $id;
        $this->date = $date;
        $this->details = $details;
        $this->customer = $customer;
        $this->system = $system;
        $this->errorType = $errorType;
        $this->misfire = $misfire;
        $this->release = $release;
        $this->shortCircuit = $shortCircuit;
    }
}