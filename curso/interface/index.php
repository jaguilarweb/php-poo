
<?php

//Contratos
// Database, get, delete, store, edit, update

interface Person5
{
    public function getName();
}


class Admin implements Person5
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
      return $this->name;
    }
}

$admin = new Admin('Jenny');
echo $admin->getName();