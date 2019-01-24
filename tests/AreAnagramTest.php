<?php
/**
 * Created by bianes.erick [at] gmail.com
 * Date: 2019-01-25
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AreAnagramTest extends TestCase
{
    public function testAreAnagram() : void
    {
        $this->assertTrue(AreAnagram::areStringsAnagrams('momdad', 'dadmom'));
        $this->assertFalse(AreAnagram::areStringsAnagrams('momdad', 'foobar'));
        $this->assertTrue(AreAnagram::areStringsAnagrams('Carthorse', 'Orchestra')); // ignore case
        $this->assertTrue(AreAnagram::areStringsAnagrams('  momdad', 'dadmom  ')); // trim spaces
    }
}