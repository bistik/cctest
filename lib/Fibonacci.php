<?php
/**
 * Created by bianes.erick [at] gmail.com
 * Date: 2019-01-25
 */

final class Fibonacci {
    public static final function fib(int $n) : array
    {
        if ($n == 0) {
            return [0];
        }
        if ($n == 1) {
            return [1];
        }
        $n1 = 1;
        $n2 = 1;
        $fib = [$n1, $n2];

        for ($i = 2; $i < $n; $i++) {
            $sum = $n1 + $n2;
            $n1 = $n2;
            $n2 = $sum;
            $fib[] = $sum;
        }
        return $fib;
    }
}