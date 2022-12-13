<?php
require_once __DIR__ . "../../category.php";
class product
{
    public $name;
    public $price;
    public $picture;
    public $available;
    public $category;

    public function __construct(string $name, string $picture, float $price, string $available, category $category)
    {
        $this->name = $name;
        $this->picture = $picture;
        $this->price = $price;
        $this->available = $available;
        $this->category = $category;
    }
}
