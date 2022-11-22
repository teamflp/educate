<?php 

// class DB::delete('delete users where name = ?', ['John'])
require_once 'AbstractDatabase.php';

class Dbase extends AbstractDatabase
{
     private static $DBASE_HOST;
     private static $DBASE_USER;
     private static $DBASE_PASS;
     private static $DBASE_NAME;

     public function __construct()
     {
          self::$DBASE_HOST = "localhost";
          self::$DBASE_USER = "paterne";
          self::$DBASE_PASS = "Mardochee2008";
          self::$DBASE_NAME = "prosigned";
     }

     static function connect()
     {
          return new PDO('mysql:host=' . self::$DBASE_HOST . ';dbname=' . self::$DBASE_NAME, self::$DBASE_USER, self::$DBASE_PASS);
     }

     static function disconnect()
     {
          self::$DBASE_HOST = null;
          self::$DBASE_USER = null;
          self::$DBASE_PASS = null;
          self::$DBASE_NAME = null;
     }
}

// Utilisation de la classe Bbase

// $pdo = DBase::connect();
// var_dump($pdo);

