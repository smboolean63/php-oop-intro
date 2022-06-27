<?php

class User {
    private $name;
    private $surname;
    public $email;

    public function __construct($_name, $_surname) {
        // $this->name = $_name;
        // $this->surname = $_surname;
        $this->setName($_name);
        $this->setSurname($_surname);
    }

    public function getFullName() {
        return "{$this->name} {$this->surname}";
    }

    public function setSurname($_surname) {
        if($this->validation($_surname)) {
            $this->surname = $_surname;
        }
    }

    public function setName($_name) {
        if($this->validation($_name)) {
            $this->name = $_name;
        }
    }

    public function getSurname() {
        return $this->surname;
    }

    public function getName() {
        return $this->name;
    }

    private function validation($data) {
        if(strlen($data) > 4) {
            return true;
        }

        return false;
    }
}