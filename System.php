<?php


class System {
    private $id;
    private $name;

    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId() { return $this->id; }
    public function setId($id): void { $this->id = $id; }
    public function getName() { return $this->name; }
    public function setName($name): void { $this->name = $name; }
}