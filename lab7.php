<?php
$final_grade = 0;

function calculate_grade($assignment, $midterm, $final) {
    global $final_grade;
    $final_grade = ($assignment * 0.3) + ($midterm * 0.3) + ($final * 0.4);
    return $final_grade;
}

$assignment_score = 95;
$midterm_score = 83;
$final_exam_score = 92;

$grade = calculate_grade($assignment_score, $midterm_score, $final_exam_score);

function display_grade($grade) {
    if ($grade >= 90) {
        return "A";
    } elseif ($grade >= 80) {
        return "B";
    } elseif ($grade >= 70) {
        return "C";
    } elseif ($grade >= 60) {
        return "D";
    } else {
        return "F";
    }
}

$letter_grade = display_grade($grade);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 40px auto;
            background: #f7f7f7;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            border-bottom: 2px solid #4caf50;
            padding-bottom: 8px;
        }
        p {
            font-size: 1.2rem;
            margin: 12px 0;
        }
        .grade {
            font-weight: bold;
            color: #4caf50;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <h2>Final Grade Calculator</h2>
    <p>Assignment Score: <?php echo $assignment_score; ?></p>
    <p>Midterm Score: <?php echo $midterm_score; ?></p>
    <p>Final Exam Score: <?php echo $final_exam_score; ?></p>
    <p>Final Numeric Grade: <span class="grade"><?php echo number_format($grade, 2); ?></span></p>
    <p>Letter Grade: <span class="grade"><?php echo $letter_grade; ?></span></p>
</body>
</html>
