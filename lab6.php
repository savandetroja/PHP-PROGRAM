<?php
setlocale(LC_TIME, 'en_US.UTF-8');
$current_date = strftime("%A, %B %d, %Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Academic Calendar</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .date-container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            font-size: 1.5rem;
            text-align: center;
            border-left: 5px solid #4caf50;
        }
    </style>
</head>
<body>
    <div class="date-container">
        Today is <?php echo htmlspecialchars($current_date); ?>
    </div>
</body>
</html>
