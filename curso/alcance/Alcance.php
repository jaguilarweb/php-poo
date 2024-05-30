<?php

class User {
  //Tipos de alcance
  // public: Accesible desde cualquier parte del código
  // protected: Accesible desde la misma clase y clases que heredan de ella
  // private: Accesible solo desde la misma clase

  public const PAGINATE = 25;
  
  public $username;
  /* protected $email; */
  /* private $password; */

  public function getUsername(){
    //Code
  }
}