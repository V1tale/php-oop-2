<?php
class product
{
    public $name;
    public $price;
    public $picture;
    public $available;

    public function __construct(string $name, string $picture, float $price, string $available)
    {
        $this->name = $name;
        $this->picture = $picture;
        $this->price = $price;
        $this->available = $available;
    }
}
