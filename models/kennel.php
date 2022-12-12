<?php
require_once __DIR__ . "/product.php";
class kennel extends product
{
    public $color;
    public $height;
    public $width;

    public function __construct($name, $picture, $price, $available, string $color, float $height, float $width)
    {
        parent::__construct($name, $picture, $price,  $available);
        $this->color = $color;
        $this->height = $height;
        $this->width = $width;
    }
}
