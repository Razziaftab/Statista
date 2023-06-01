<?php
declare(strict_types=1);

include "src/FizzBuzz.php";

use src\FizzBuzz;

// Create a new instance of the FizzBuzz class
$fizzBuzz = new FizzBuzz();

// Call the handle method to print the numbers from 1 to 100
$fizzBuzz->handle(1, 100);
