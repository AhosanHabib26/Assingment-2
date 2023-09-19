<?php
function calculateFibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return calculateFibonacci($n - 1) + calculateFibonacci($n - 2);
    }
}

function printFirst10FibonacciNumbers() {
    $count = 10;
    $fibonacciNumbers = array();

    for ($i = 0; $i < $count; $i++) {
        $fibonacci = calculateFibonacci($i);
        
        // Break if Fibonacci number is greater than 100
        if ($fibonacci > 100) {
            break;
        }
        
        $fibonacciNumbers[] = $fibonacci;
    }

    echo "First 10 Fibonacci numbers:\n";
    echo implode(", ", $fibonacciNumbers);
}

// Call the function to print the first 10 Fibonacci numbers
printFirst10FibonacciNumbers();
?>
