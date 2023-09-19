<?php
function printFibonacci($count) {
    $fibonacciNumbers = array();

    if ($count < 1) {
        echo "Count should be at least 1.";
        return;
    } elseif ($count >= 1) {
        $fibonacciNumbers[] = 0;
    }

    if ($count >= 2) {
        $fibonacciNumbers[] = 1;
    }

    for ($i = 2; $i < $count; $i++) {
        $fibonacciNumbers[] = $fibonacciNumbers[$i - 1] + $fibonacciNumbers[$i - 2];
    }

    echo "First $count Fibonacci numbers:\n";
    echo implode(", ", $fibonacciNumbers);
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);
?>
