<?php
function printEvenNumbersUsingWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}

// Call the function to print even numbers
printEvenNumbersUsingWhile(2, 20, 2);
?>
