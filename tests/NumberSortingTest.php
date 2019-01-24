<?php
/**
 * Created by bianes.erick [at] gmail.com
 * Date: 2019-01-25
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class NumberSortingTest extends TestCase
{
    public function testSortAscending() : void
    {
        $ar = [3, 4, 1, 2, 5];
        NumberSorting::sortAscending($ar);
        $this->assertEquals([1, 2, 3, 4, 5], $ar);

        $ar = [3, 2, 1, 2, 5];
        NumberSorting::sortAscending($ar);
        $this->assertEquals([1, 2, 2, 3, 5], $ar);

        $ar = [1.3, 1.4, 1.1, 1.2, 1.5];
        NumberSorting::sortAscending($ar);
        $this->assertEquals([1.1, 1.2, 1.3, 1.4, 1.5], $ar);
    }

    public function testSortDescending() : void
    {
        $ar = [3, 4, 1, 2, 5];
        NumberSorting::sortDescending($ar);
        $this->assertEquals([5, 4, 3, 2, 1], $ar);

        $ar = [3, 2, 1, 2, 5];
        NumberSorting::sortDescending($ar);
        $this->assertEquals([5, 3, 2, 2, 1], $ar);

        $ar = [1.3, 1.4, 1.1, 1.2, 1.5];
        NumberSorting::sortDescending($ar);
        $this->assertEquals([1.5, 1.4, 1.3, 1.2, 1.1], $ar);
    }
}