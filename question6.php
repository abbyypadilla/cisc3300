<?php
$coffeeMenu = array 
(
    "Latte" => 3.75,
    "Espresso" => 2.50,
    "Mocha" => 4.00,
    "Cappuccino" => 3.50,
    "Americano" => 2.25
);

foreach($coffeeMenu as $coffeeType => $price) 
{
    echo "Coffee: $coffeeType, Price: $price<br>";
}

// Question 7
function getDiscountedPrice(float $price, float $discount = 0.10): float 
{
    return $price - ($price * $discount);
}

foreach($coffeeMenu as $coffeeType => $price) 
{
    $discountedPrice = getDiscountedPrice($price);
    echo "Discounted Price for $coffeeType: $$discountedPrice<br>";
}
?>