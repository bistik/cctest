<?php
/**
* Created by bianes.erick [at] gmail.com
* Date: 2019-01-25
*/

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PalindromeTest extends TestCase
{
    public function testIsPalindrome() : void
    {
        $this->assertTrue(Palindrome::isPalindrome('kayak'));
        $this->assertTrue(Palindrome::isPalindrome('kay 23. ak')); //ignore num,special chars
        $this->assertTrue(Palindrome::isPalindrome('A Santa at Nasa.')); //ignore uppercase
        $this->assertFalse(Palindrome::isPalindrome('ab'));
    }
}