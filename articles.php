<?php
require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/kennel.php";
require_once __DIR__ . "/models/food.php";
require_once __DIR__ . "/models/toy.php";
require_once __DIR__ . "/category.php";


$treats = new food("Premium Dog Treats", "01", 15, "yes", new category("dog"), 10, "700kcal", "june 2023");
$catTreats = new food("Premium Cat Treats", "012", 12, "yes", new category("cat"), 10, "550kcal", "june 2023");
$snack = new food("Delicious Snack", "013", 5, "no", new category("dog"), 1, "200kcal", "december 2023");
$vitamins = new food("Vitality Multivitamin", "014", 10, "yes", new category("cat"), 0.5, "120kcal", "march 2023");


$rubberDuck = new toy("Rubber Duck", "02", 2, "yes", new category("dog"), "yellow", 100, "yes");
$mouse = new toy("My Little Mouse", "022", 2, "yes", new category("cat"), "gray", 70, "yes");
$fresbee = new toy("Mega Fresbee", "023", 5, "mo", new category("dog"), "orange", 250, "no");
$wool = new toy("Wool Ball", "024", 3, "yes", new category("cat"), "blue", 40, "no");


$bigDogKennel = new kennel("Big Suit Deluxe", "03", 40, "no", new category("dog"), "tartan", 1.4, 0.7);
$smallDogKennel = new kennel("Small Suit Deluxe", "032", 25, "yes", new category("dog"), "begie", 0.8, 0.4);
$bigCatKennel = new kennel("Big cat Suit Deluxe", "033", 35, "yes", new category("cat"), "black", 1, 0.5);
$smallCatKennel = new kennel("Small cat Suit Deluxe", "034", 20, "no", new category("cat"), "white", 0.7, 0.4);

$articles1 = array($treats, $catTreats, $snack, $vitamins);
$articles2 = array($rubberDuck, $mouse, $fresbee, $wool);
$articles3 = array($bigDogKennel, $smallDogKennel, $bigCatKennel, $smallCatKennel);
