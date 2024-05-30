<?php

include 'User.php';
include 'Admin.php';


$user = new User;
$user->type = new Admin;
echo $user->type->greet();