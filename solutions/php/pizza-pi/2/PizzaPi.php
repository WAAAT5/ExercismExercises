<?php

class PizzaPi
{
    public const SAUCE_PER_PIZZA = 125;
    public const SLICES_PER_PIZZA = 8;

    public function calculateDoughRequirement($pizzas, $persons)
    {
        return $pizzas * (($persons * 20) + 200);
    }

    public function calculateSauceRequirement($pizzas, $sauce_per_can)
    {
        return ($pizzas * self::SAUCE_PER_PIZZA)/ $sauce_per_can;
    }

    public function calculateCheeseCubeCoverage($cheese_dimension, $thickness ,$diameter)
    {
        return (int) (($cheese_dimension**3)/ ($thickness * M_PI * $diameter));
    }

    public function calculateLeftOverSlices($pizzas, $friends)
    {
        return ($pizzas * self::SLICES_PER_PIZZA) % $friends;
    }
}

$pizza = new PizzaPi();
echo $pizza->calculateDoughRequirement(4, 8) . "\n";
echo $pizza->calculateSauceRequirement(8, 250) . "\n";
echo $pizza->calculateCheeseCubeCoverage(25, 0.5, 30) . "\n";
echo $pizza->calculateLeftOverSlices(2, 4) . "\n";