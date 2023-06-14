<?php
require("Wordfiddler.php");
require("Calculator.php");

# Here we are instantiating a new object from the Wordfiddler class, and passing it a string.
$wordFiddler = new Wordfiddler("Cheese");

# And here we try out the various methods in turn, to show how it works
echo $wordFiddler->upperCase() . "<br/>";
echo $wordFiddler->lowerCase() . "<br/>";
echo $wordFiddler->giveMeItTwiceForSomeReason() . "<br/>";
echo $wordFiddler->reverseIt() . "<br/>";

# And here we try out the calculator - note we don't send it anything as it hasn't got a constructor defined with any parameters
$calculator = new Calculator();
echo $calculator->exponent(2, 3) . "<br/>";
echo $calculator->exponent(3, 2) . "<br/>";
echo $calculator->exponent(4, 5) . "<br/>";