<?php
//include, require
include 'greet.php';

echo greet('Jenny', 'Cómo estás...');


class User {
    public $type;
}

class Admin {
    public function greet() {
      return "<h1>Hola Administrador</h1>";
    }
}

$user = new User;
$user->type = new Admin;
echo $user->type->greet(); //