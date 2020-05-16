<?php

class User {

    private $nric;
    private $password;
    private $name;
    private $race;
    private $DOB;
    private $Sex;
    private $CountryOfBirth;
    private $Address;
    private $email;
    private $contactNo;
    
    public function __construct($nric, $password, $name, $race, $DOB, $Sex, $CountryOfBirth, $Address, $email, $contactNo) {
        $this->nric = $nric;
        $this->password = $password;
        $this->name = $name;
        $this->race = $race;
        $this->DOB = $DOB;
        $this->Sex= $Sex;
        $this->CountryOfBirth = $CountryOfBirth;
        $this->Address = $Address;
        $this->email = $email;
        $this->contactNo = $contactNo;
    }
    
    public function getNric() {
        return $this->nric;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getName() {
        return $this->name;
    }

    public function getRace() {
        return $this->race;
    }

    public function getDOB() {
        return $this->DOB;
    }

    public function getSex() {
        return $this->Sex;
    }

    public function getCountryOfBirth() {
        return $this->CountryOfBirth;
    }

    public function getAddress() {
        return $this->Address;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getContactNo(){
        return $this->contactNo;
    }

}

?>