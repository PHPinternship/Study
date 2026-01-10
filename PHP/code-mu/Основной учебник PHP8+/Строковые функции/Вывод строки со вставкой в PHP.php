<?php
//1
$price = 19.99;
printf('price: %.2f$<br>', $price);
//2
$name = "John";
$age = 25;
printf('Name: %s, Age: %u years<br>', $name, $age);
//3
$name = 'John';
$score = 95;
printf('student %s scored %u points<br>', $name, $score);
//4
$product = "Laptop";
$price = 1299.99;
$discount = 15;
printf('Product: %s | Price: $%.2f | Discount: %u%%<br>', $product, $price, $discount);
//5
$x = 10;
$y = 20;
$z = 30;
printf('Sum: %u + %u + %u = %u<br>', $x, $y, $z, $x+$y+$z);
//6
$day = 15;
$month = "March";
$year = 2023;
printf('Date: %s %u, %u', $month, $day, $year);