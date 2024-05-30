<?php

class Usuario {
  public $name;

  public function __construct($name){
    $this->name = $name;
  }

  public function getName(){
    return $this->name;
  }

}

class Admin3 extends Usuario {
  // Sobre escribo la función
  public function getName(){
    return "Soy $this->name";
  }
}

$admin = new Admin3('Jenny');

echo $admin->getName();