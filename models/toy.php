<?php
require_once __DIR__ . "/product.php";
class toy extends product
{
    public $color;
    public $weight;
    public $chewable;

    public function __construct($name, $picture, $price,  $available, $category, string $color, float $weight, string $chewable)
    {
        parent::__construct($name, $picture, $price,  $available, $category);
        $this->color = $color;
        $this->weight = $weight;
        $this->chewable = $chewable;
    }
}
