<?php

require("Controller.php");

$action = $_GET["action"] ?? "home"; 

try {
  $action();
} catch (\Throwable $th) {
  notFound();
}


