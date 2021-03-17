<?php

require("Controller.php");

$action = $_GET["action"] ?? "home"; 

$action();
