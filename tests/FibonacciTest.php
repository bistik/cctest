<?php
/**
 * Created by bianes.erick [at] gmail.com
 * Date: 2019-01-25
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FibonacciTest extends TestCase
{
    public function testFib() : void
    {
        $this->assertEquals([0], Fibonacci::fib(0));
        $this->assertEquals([1], Fibonacci::fib(1));
        $this->assertEquals([1,1], Fibonacci::fib(2));
        $this->assertEquals([1, 1, 2], Fibonacci::fib(3));
        $this->assertEquals([1, 1, 2, 3], Fibonacci::fib(4));
        $this->assertEquals([1, 1, 2, 3, 5], Fibonacci::fib(5));
        $this->assertEquals([1, 1, 2, 3, 5, 8], Fibonacci::fib(6));
        $this->assertEquals([1, 1, 2, 3, 5, 8, 13], Fibonacci::fib(7));
        $this->assertEquals([1, 1, 2, 3, 5, 8, 13, 21], Fibonacci::fib(8));
        $this->assertEquals([1, 1, 2, 3, 5, 8, 13, 21, 34], Fibonacci::fib(9));
        $this->assertEquals([1, 1, 2, 3, 5, 8, 13, 21, 34, 55], Fibonacci::fib(10));
        $this->assertEquals([1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89], Fibonacci::fib(11));
        $this->assertEquals([1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144], Fibonacci::fib(12));
        $this->assertEquals([1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181],
                                Fibonacci::fib(19));
    }
}