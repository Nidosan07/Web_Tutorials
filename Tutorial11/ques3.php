<?php 
$units = 100;
$rate = 0;

if ($units <= 50) {
    $rate = 3.5;
} else if ($units <= 100) {
    $rate = 4;
} else if ($units <= 150) {
    $rate = 5.2;
} else {
    $rate = 6.5;
}

$amount = $units * $rate;

echo "Amount : " . $amount . "\n";


?>