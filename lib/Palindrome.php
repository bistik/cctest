<?php
/**
 * Created by bianes.erick [at] gmail.com
 * Date: 2019-01-25
 */

declare(strict_types=1);

final class Palindrome {
    public static final function isPalindrome(string $input) : bool
    {
        $normalized = preg_replace('/[^a-zA-Z]/', '', strtolower($input));
        return strrev($normalized) === $normalized;
    }
}