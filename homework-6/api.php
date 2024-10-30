<!-- Question 9 -->

<?php
$coffeeMenu =
[
    "Latte" => 3.75,
    "Espresso" => 2.50,
    "Mocha" => 4.00,
    "Cappuccino" => 3.50,
    "Americano" => 2.25
];

header('Content-Type: application/json');
echo json_encode($coffeeMenu);
?>