<?php

/**
 * Created by bianes.erick [at] gmail.com
 * Date: 2019-01-25
 */

declare(strict_types=1);

require './vendor/autoload.php';

$result = '';
if (isset($_GET['str1']) && !empty(trim($_GET['str1'])) &&
    isset($_GET['str2']) && !empty(trim($_GET['str2']))) {
    $str1 = $_GET['str1'];
    $str2 = $_GET['str2'];
    $result = "'$str1' and '$str2' are ";
    $result .= AreAnagram::areStringsAnagrams($str1, $str2) ? "Anagrams" : "not Anagrams";
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <input type="text" name="str1" required value="<?php echo $_GET['str1'] ?? '' ?>">
    <input type="text" name="str2" required value="<?php echo $_GET['str2'] ?? '' ?>">
    <button type="submit">Check if anagrams</button>
</form>

<pre>
    <?php echo $result ?>
</pre>

