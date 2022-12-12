<?php
require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/kennel.php";
require_once __DIR__ . "/models/food.php";
require_once __DIR__ . "/models/toy.php";

$treats = new food("Premium Dog Treats", "01", 15, "yes", 10, "700kcal", "june 2023");
var_dump($treats);

$rubberDuck = new toy("Rubber Duck", "02", 2, "yes", "yellow", 100, "yes");
var_dump($rubberDuck);

$firstKennel = new kennel("Big Suit Deluxe", "03", 40, "yes", "tartan", 1.4, 0.7);
var_dump($firstKennel);

$articles1 = array($treats,);
