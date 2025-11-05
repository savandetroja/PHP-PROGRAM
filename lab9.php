<?php
function date_difference($start_date, $end_date) {
    $start = new DateTime($start_date);
    $end = new DateTime($end_date);
    $interval = $start->diff($end);
    return $interval->days;
}

$start_date = "2025-09-01";
$end_date = "2025-12-15";
$days_diff = date_difference($start_date, $end_date);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Date Difference Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 450px;
            margin: 50px auto;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
            color: #34495e;
        }
        .highlight {
            font-weight: bold;
            color: #27ae60;
            font-size: 1.4rem;
        }
    </style>
</head>
<body>
    <h2>Date Difference Calculator</h2>
    <p>Start Date: <?php echo htmlspecialchars($start_date); ?></p>
    <p>End Date: <?php echo htmlspecialchars($end_date); ?></p>
    <p>Days Between: <span class="highlight"><?php echo $days_diff; ?></span></p>
</body>
</html>
