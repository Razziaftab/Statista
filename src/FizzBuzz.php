<?php
declare(strict_types=1);

namespace src;
class FizzBuzz
{
    /**
     * @param int $start
     * @param int $end
     * @return void
     */
    public function handle(int $start, int $end): void
    {
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                echo "FizzBuzz\n";
            } elseif ($i % 3 === 0) {
                echo "Fizz\n";
            } elseif ($i % 5 === 0) {
                echo "Buzz\n";
            } else {
                echo $i . "\n";
            }
        }
    }
}
