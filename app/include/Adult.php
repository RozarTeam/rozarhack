<?php

class Adult {

    private $username;
    private $name;
    private $date;
    
    public function __construct($username, $name, $date) {
        $this->username = $username;
        $this->name = $name;
        $this->date = $date;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getName() {
        return $this->name;
    }

    public function getDate() {
        return $this->date;
    }
}

?>