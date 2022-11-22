<?php

class Users
{
     public $id;
     public $name;
     public $email;

     public function __construct($id, $name, $email)
     {
          $this->id = $id;
          $this->name = $name;
          $this->email = $email;
     }


     static function getAllUsers()
     {
          $pdo = Dbase::connect();
          $req = $pdo->prepare('SELECT * FROM users');
          $req->execute();
          $users = $req->fetchAll();
          return $users;
     }

     static function getUsersById($id)
     {
          $pdo = Dbase::connect();
          $req = $pdo->prepare('SELECT * FROM users WHERE id = :id');
          $req->execute(['id' => $id]);
          $user = $req->fetch();
          return $user;
     }

     static function getUserLastId()
     {
          $pdo = Dbase::connect();
          $req = $pdo->prepare('SELECT * FROM users ORDER BY id DESC LIMIT 1');
          $req->execute();
          $user = $req->fetch();
          return $user;
     }
}