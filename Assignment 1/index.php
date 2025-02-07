
<?php
$name="Daniel";
$age=22;
$favorite_color="Crimson";
echo "Hello, my name is " . $name . " I am " . $age . " years old. My favorite color is " . $favorite_color . ".";
?>
<?php
echo "\nHe said \"PHP is fun!\" and left.";
?>
<?php
echo " \nFirst line\nSecond line";
?>

<?php
$greeting = 'Hello';
$age=25;
echo "\nWelcome to the PHP world! ";
Echo "\nYour age is " . $age;
?>

<?php
echo "\nWelcome to PHP!";
$name = "John";
echo "\nHello " , $name;
?>

<?php
$price = 50;
#Variable for price set as 50
$discount = 10;
//variable for discount set as 10
$finalPrice = $price - $discount;
/*Variable final price is set as price minus discount */
echo "Total price: $" . $finalPrice;
#final price and text is displayed
?>



<?php
$numberOne = 10;
$numberTwo = 5;

echo "Number 1: " . $numberOne . "\n";
echo "Number 2: " . $numberTwo . "\n";
echo "Addition: " . ($numberOne + $numberTwo) . "\n";
echo "Subtraction: " . ($numberOne - $numberTwo) . "\n";
echo "Multiplication: " . ($numberOne * $numberTwo) . "\n";
echo "Division: " . ($numberOne / $numberTwo) . "\n";
echo "Modulus: " . ($numberOne % $numberTwo) . "\n";
?>


<?php
$number = 7;

if ($number % 2 == 0) {
    echo "Input: " . $number . "\n";
    echo "Output: " . $number . " is an even number.\n";
} else {
    echo "Input: " . $number . "\n";
    echo "Output: " . $number . " is an odd number.\n";
}
?>


<?php
$number = 10;

echo "Starting number: " . $number . "\n";

$number++;
echo "After increment: " . $number . "\n";

$number--;
echo "After decrement: " . $number . "\n";
?>


<?php
$marks = 85;

echo "Input: " . $marks . "\n";

if ($marks >= 90) {
    echo "Output: You got an A!\n";
} elseif ($marks >= 80) {
    echo "Output: You got a B!\n";
} elseif ($marks >= 70) {
    echo "Output: You got a C!\n";
} elseif ($marks >= 60) {
    echo "Output: You got a D!\n";
} else {
    echo "Output: You got an F!\n";
}
?>


<?php
$year = 2024;

echo "Input: " . $year . "\n";

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "Output: " . $year . " is a leap year.\n";
} else {
    echo "Output: " . $year . " is not a leap year.\n";
}
?>
