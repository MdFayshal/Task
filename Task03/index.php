<?php

function findIndices($numbers, $target) {
    $left = 0;
    $right = count($numbers) - 1;

    while ($left < $right) {
        $sum = $numbers[$left] + $numbers[$right];

        if ($sum == $target) {
            return [$left, $right];
        } elseif ($sum < $target) {
            $left++;
        } else {
            $right--;
        }
    }

    return "No indices found";
}

// Example usage:
$numbers = [1, 2, 4, 7, 11, 15];
$target = 9;

$result = findIndices($numbers, $target);

if (is_array($result)) {
    echo "Indices found: " . implode(', ', $result);
} else {
    echo $result;
}

?>
