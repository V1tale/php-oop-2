<?php
require_once __DIR__ . "/product.php";
class food extends product
{
    public $quantity;
    public $nutritionalValues;
    public $expirationDate;

    public function __construct($name, $picture, $price,  $available, $category, string $quantity, string $nutritionalValues, string $expirationDate)
    {
        parent::__construct($name, $picture, $price,  $available, $category);
        $this->quantity = $quantity;
        $this->nutritionalValues = $nutritionalValues;
        $this->expirationDate = $expirationDate;
    }
}
