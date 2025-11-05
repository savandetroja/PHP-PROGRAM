<?php
$responses = [4, 5, 3, 4, 2, 5, 4, 3, 4, 5];

function calculate_average($scores) {
    if (count($scores) === 0) {
        return 0;
    }
    $total = array_sum($scores);
    $average = $total / count($scores);
    return round($average, 2);
}

function display_results($scores) {
    $average = calculate_average($scores);
    $count = count($scores);
    echo "Total responses: $count <br>";
    echo "Average score: $average <br>";
}

display_results($responses);
?>
