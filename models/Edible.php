<?php

class Edible extends Manager {
  public static function all() {
    $pdo = self::dbCnx();
    $edibles = [];

    $req = $pdo->query("SELECT * FROM `Edible`");

    foreach($req as $data) {
      array_push($edibles, new Edible($data));
    }

    return $edibles;
  }

  private $id;
  private $name;

  public function __construct($data) {
    $this->id = $data["id"];
    $this->name = $data["name"];
  }

  public function info() {
    return $this->id . " - " . $this->name; 
  }
}