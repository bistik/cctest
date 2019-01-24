<?php
/**
 * Created by bianes.erick [at] gmail.com
 * Date: 2019-01-25
 */

final class AreAnagram {
    public static final function areStringsAnagrams(string $str1, string  $str2) : bool
    {
        $ar1 = str_split(strtolower(trim($str1)));
        $ar2 = str_split(strtolower(trim($str2)));
        sort($ar1);
        sort($ar2);
        return join('', $ar1) === join('', $ar2);
    }
}