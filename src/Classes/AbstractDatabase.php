<?php

// Database abstract

abstract class AbstractDatabase
{
     private static $DBASE_HOST;
     private static $DBASE_USER;
     private static $DBASE_PASS;
     private static $DBASE_NAME;

     public function __construct($DBASE_HOST, $DBASE_USER, $DBASE_PASS, $DBASE_NAME)
     {
          self::$DBASE_HOST = $DBASE_HOST;
          self::$DBASE_USER = $DBASE_USER;
          self::$DBASE_PASS = $DBASE_PASS;
          self::$DBASE_NAME = $DBASE_NAME;
     }

     static function connect()
     {
          return new PDO(self::$DBASE_HOST, self::$DBASE_USER, self::$DBASE_PASS, self::$DBASE_NAME);
     }
}

// On se connect à la base de données
