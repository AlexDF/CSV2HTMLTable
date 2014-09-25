<?php
class record{
  public $firstname, $lastname, $company, $address, $city, $county, $state, $zip, $phone1, $phone2, $email, $web;

  public function __construct($fn, $ln, $comp, $addr, $city, $county, $state, $zip, $ph1, $ph2, $email, $web){
    $this->firstname = $fn;
    $this->lastname = $ln;
    $this->company = $comp;
    $this->address = $addr;
    $this->city = $city;
    $this->county = $county;
    $this->state = $state;
    $this->zip = $zip;
    $this->phone1 = $ph1;
    $this->phone2 = $ph2;
    $this->email = $email;
    $this->web = $web;
  }
}





?>