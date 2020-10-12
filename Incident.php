<?php


class Incident {
    private $id;
    private $date;
    private $details;
    private $customer;
    private $system;
    private $errorType;
    private $misfire;
    private $release;
    private $shortCircuit;

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

    public function getId() { return $this->id; }
    public function setId($id): void { $this->id = $id; }
    public function getDate() { return $this->date; }
    public function setDate($date): void { $this->date = $date; }
    public function getDetails() { return $this->details; }
    public function setDetails($details): void { $this->details = $details; }
    public function getCustomer() { return $this->customer; }
    public function setCustomer($customer): void { $this->customer = $customer; }
    public function getSystem() { return $this->errorType; }
    public function setSystem($errorType): void { $this->errorType = $errorType; }
    public function getMisfire() { return $this->misfire; }
    public function setMisfire($misfire): void { $this->misfire = $misfire; }
    public function getRelease() { return $this->release; }
    public function setRelease($release): void { $this->release = $release; }
    public function getShortCircuit() { return $this->shortCircuit; }
    public function setShortCircuit($shortCircuit): void { $this->shortCircuit = $shortCircuit; }
}