<?php

require_once __DIR__ . "/vendor/autoload.php";

use Rizal\Data\People;

$user = new People("Rizal");
$user->sayHello("Uhuy");
