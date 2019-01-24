<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 2019-01-25
 * Time: 01:21
 */

final class NumberSorting
{
    public static final function sortAscending(array &$numbers) : void
    {
        sort($numbers, SORT_NUMERIC);
    }

    public static final function sortDescending(array &$numbers) : void
    {
        rsort($numbers, SORT_NUMERIC);
    }
}