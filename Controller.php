<?php

require("models/Manager.php");

function home() {
  require("views/home.php");
}

function edibles() {
  require("models/Edible.php");

  $edibles = Edible::all();

  if(count($edibles)) {
    $title = "Liste de mes cafés";
  } else {
    $title = "Oops aucun café";
  }  

  require("views/edibles.php");
}


function waiters() {
  require("models/Waiter.php");

  $waiters = Waiter::all();

  if(count($waiters)) {
    $title = "Liste de mes serveurs";
  } else {
    $title = "Oops aucun serveurs";
  }  

  require("views/waiters.php");
}