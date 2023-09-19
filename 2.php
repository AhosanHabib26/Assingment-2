<?php
function printNumbersWithSkipping() {
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 5 == 0) {
            continue; // Skip multiples of 5
        }
        echo $i . " ";
    }
}

// Call the function to print numbers with skipping multiples of 5
printNumbersWithSkipping();
?>
