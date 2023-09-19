
<?php
function printEvenNumbersUsingFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

// Call the function to print even numbers
printEvenNumbersUsingFor(2, 20, 2);
?>


