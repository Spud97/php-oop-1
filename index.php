<?php
require_once "classi/Movie.php";

$movie1 = new Movie ("Django Unchained", "Quentin Tarantino", 2013);
$movie1->paesePruduzione = "Stati Uniti d'America";

$movie2 = new Movie ("Le Mans '66", "James Mangold", 2019);
$movie2->paesePruduzione = "Stati Uniti d'America";

$movie1->printText();
$movie2->printText();