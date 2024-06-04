<?php

declare(strict_types=1);

namespace App\Bussiness;

class Drink
{
    private $name;
    private $size;
    private $price;

    public function __construct(string $name, int $size, float $price)
    {
        $this->name = $name;
        $this->size = $size;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getSize(): int
    {
        return $this->size;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
}
