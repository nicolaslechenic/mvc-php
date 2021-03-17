<?php

class Manager {
  protected static $_pdo = null;

  protected static function dbCnx() {
    if(is_null(self::$_pdo)) {
      self::$_pdo = 
        new PDO('mysql:host=localhost:8889;dbname=coffee;charset=utf8', 'root', 'root');

      return self::$_pdo ;
    } else {
      return self::$_pdo;
    }
  }
}