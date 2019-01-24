<?php
/**
 * Created by bianes.erick [at] gmail.com
 * Date: 2019-01-25
 */

declare(strict_types = 1);

require './vendor/autoload.php';

$resultAscending = '';
$resultDescending = '';

if (isset($_GET['numbers']) && is_array($_GET['numbers']) && count($_GET['numbers']) == 5) {
    $numbers = $_GET['numbers'];
    NumberSorting::sortAscending($numbers);
    $resultAscending = 'Ascending: ' . join(',', $numbers);
    NumberSorting::sortDescending($numbers);
    $resultDescending = 'Descending: ' . join(',', $numbers);

}
?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input type="text" size="3" required name="numbers[]" value="<?php echo $_GET['numbers'][0] ?? ''?>">
    <input type="text" size="3" required name="numbers[]" value="<?php echo $_GET['numbers'][1] ?? ''?>">
    <input type="text" size="3" required name="numbers[]" value="<?php echo $_GET['numbers'][2] ?? ''?>">
    <input type="text" size="3" required name="numbers[]" value="<?php echo $_GET['numbers'][3] ?? ''?>">
    <input type="text" size="3" required name="numbers[]" value="<?php echo $_GET['numbers'][4] ?? ''?>">
    <button type="submit">Sort these numbers</button>
</form>

<pre>
    <?php echo $resultAscending ?>
    <br>
    <?php echo $resultDescending ?>
</pre>
