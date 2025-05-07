<?php
$number = -4;

$type = ($number >= 0) ? "Positive" : "Negative";
$parity = ($number % 2 == 0) ? "Even" : "Odd";

echo "The number $number is $type and $parity.";
?>
