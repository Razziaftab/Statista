<?php
declare(strict_types=1);

namespace tests;

include "src/FizzBuzz.php";

use PHPUnit\Framework\TestCase;
use src\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    /**
     * @return void
     */
    public function testFizzBuzzOutput(): void
    {
        $fizzBuzz = new FizzBuzz();

        ob_start();
        $fizzBuzz->handle(1, 15);
        $output = ob_get_clean();

        $expectedOutput = "1\n2\nFizz\n4\nBuzz\nFizz\n7\n8\nFizz\nBuzz\n11\nFizz\n13\n14\nFizzBuzz\n";

        $this->assertEquals($expectedOutput, $output);
    }
}
