<?php

require_once __DIR__ . "/vendor/autoload.php";

use rizalfirdaus\Belajar\sayHello;

$sayhello = new sayHello("Rizal", 22);
$sayhello->setName("Fahmi Ihsan Firdaus");
$sayhello->setAge(10);
$sayhello->sayHello();
