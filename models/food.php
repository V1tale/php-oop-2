<?php
require_once __DIR__ . "/product.php";
class food extends product
{
    public $quantity;
    public $nutritionalValues;
    public $expireDate;

    public function __construct($name, $picture, $price,  $available, string $quantity, string $nutritionalValues, string $expirationDate)
    {
        parent::__construct($name, $picture, $price,  $available);
        $this->quantity = $quantity;
        $this->nutritionalValues = $nutritionalValues;
        $this->expirationDate = $expirationDate;
    }
}
