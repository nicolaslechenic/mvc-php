<?php

require("Controller.php");

$action = $_GET["action"] ?? "home"; 

switch($action) {
  case "waiters":
    waiters();
    break;
  case "edibles":
    edibles();
    break;
  default:
    home();
    break;
}