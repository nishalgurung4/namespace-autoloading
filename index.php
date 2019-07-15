<?php
use Rivsen\Demo\Hello;
// require './src/Person.php';
require_once __DIR__ .'/vendor/autoload.php';
$person = new Nishal\Person();
$person->display();

$hello = new Hello();
echo $hello->getName();
