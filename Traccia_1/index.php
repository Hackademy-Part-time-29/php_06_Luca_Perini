<?php
//TRACCIA 1

require_once ('class.php');

$actuality = new Actuality();
$sport = new Sport();
$gossip = new Gossip();
$history = new History();

$actuality->getMyCategory();
$sport->getMyCategory();
$gossip->getMyCategory();
$history->getMyCategory();


