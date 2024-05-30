<?php

interface Search{
  //Declaramos
    public function all();
}

class User2 implements Search {
  //Implementando los metodos
    public function all(){
        return 'Obtiene los user en XML';
    }
}

class Post implements Search {
  //Implementando los metodos
    public function all(){
        return 'Obtiene los user en JSON';
    }
}



$user = new User2();
echo $user->all(). '<br>';

$post = new Post();
echo $post->all();