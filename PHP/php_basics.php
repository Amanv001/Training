<?php
//  W3 Schools

// PHP Syntax Exercise
echo "Hello World";
echo "<br/>";

//  PHP Variable Exercise
// Create a variable named txt and assign the value "Hello".
$txt = "Hello";
echo $txt;
echo "<br/>";

// PHP Strings Exercise
//  Get the length of the string "Hello World!". 
echo strlen("Hello World");
echo "<br/>";

//  PHP Operators Exercise
//  Multiply 10 with 5, and output the result. 
echo 10*5;
echo "<br/>";
echo "<br/>";

// PHP if..else Exercise
// Output "Hello World" if $a is greater than $b.
$a = 60;
$b = 20;
if($a>$b){
    echo "Hello World";
}
echo "<br/>";

//  PHP Switch Exercise
//  Create a switch statement that will output "Hello" if $color is "red", and "welcome" if $color is "green".
$color = "red";
switch($color){
    case "red":
        echo "Hello";
        break;
    case "green":
        echo "welcome";
        break;
}
echo "<br/>";

//  PHP while Loop Exercise
//  Output $i as long as $i is less than 6.
$i = 1;
while($i < 6){
    echo $i;
    $i++;
}
echo "<br/>";

// PHP For Loop Exercise
// Create a loop that runs from 0 to 9.
for ($i=0; $i < 10; $i++) { 
    echo $i;
}

// PHP Functions Exercise
// Create a function named myFunction.
function myFunction(){
    echo "Hello World";
}

// PHP Arrays Exercise
// Use the correct function to output the number of items in an array.
$fruits = array("Apple", "Banana", "Orange");
echo count($fruits);

// Output the second item in the $fruits array.
echo ($fruits[1]);

// Create an associative array containing the age of Peter, Ben and Joe.
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "55");

// Use the correct array method to sort the $colors array alphabetically
$colors = array("red", "green", "blue", "yellow"); 
echo sort($colors);


?>