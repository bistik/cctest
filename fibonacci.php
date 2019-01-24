<?php
/**
 * Created by bianes.erick [at] gmail.com
 * Date: 2019-01-25
 */

declare(strict_types = 1);

require './vendor/autoload.php';

$result = '';
if (isset($_GET['num']) && !empty(trim($_GET['num'])) && is_numeric(trim($_GET['num']))) {
    $num = intval(trim($_GET['num']));
    $result .= "Fibonacci of $num is " . join(',', Fibonacci::fib($num));
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    Number: <input type="text" name="num" size="5" required value="<?php echo $_GET['num'] ?? '' ?>">
    <button type="submit">Get Fibonacci of Number</button>
</form>

<pre>
    <?php echo $result ?>
</pre>