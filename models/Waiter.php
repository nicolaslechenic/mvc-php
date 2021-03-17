<?php

class Waiter extends Manager {
  public static function all() {
    $pdo = self::dbCnx();
    $waiters = [];

    $req = $pdo->query("SELECT * FROM `Waiter`");

    foreach($req as $data) {
      array_push($waiters, new Waiter($data));
    }

    return $waiters;
  }

  private $id;
  private $name;

  public function __construct($data) {
    $this->id = $data["id"];
    $this->name = $data["name"];
  }

  public function info() {
    return "Salut je suis " . $this->name . " et j'ai l'id " . $this->id; 
  }
}