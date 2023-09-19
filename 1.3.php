<?php
function printEvenNumbersUsingDoWhile($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
}

// Call the function to print even numbers
printEvenNumbersUsingDoWhile(2, 20, 2);
?>
