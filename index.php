<?php
use Kompassit\Numbertoletter\Index;
require_once 'vendor/autoload.php';
$number = new Index();$number->setLng("fr");
echo $number->number2letter(123.3,"EUROS","CENTIMES");