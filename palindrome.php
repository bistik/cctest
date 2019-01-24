<?php
/**
 * Created by bianes.erick [at] gmail.com
 * Date: 2019-01-25
 */

declare(strict_types = 1);

require './vendor/autoload.php';

$result = '';
if (isset($_GET['str']) && !empty(trim($_GET['str']))) {
    $input = $_GET['str'];
    $result = "'$input'";
    $result .= Palindrome::isPalindrome($input) ? " is a Palindrome" : " is not a Palindrome";
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <input type="text" name="str" required value="<?php echo $_GET['str'] ?? '' ?>">
    <button type="submit">Check if palindrome</button>
</form>

<pre>
    <?php echo $result ?>
</pre>