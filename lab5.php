<?php
// Same data and functions from before
$personal_info = [
    "name" => "savan detroja",
    "email" => "sd@gmail.com",
    "phone" => "+91 1234567891",
    "address" => "morbi,Gujarat-363642"
];

$education = [
    [
        "degree" => "Bachelor of Computer Application",
        "school" => "marwadi University",
        "year" => "2021-2024"
    ],
    [
        "degree" => "MCA",
        "school" => "Marwadi University",
        "year" => "2025"
    ]
];

$work_experience = [
    [
        "job_title" => "Software Developer",
        "company" => "Tech Solutions Inc.",
        "years" => "2018 - Present",
        "details" => "Developed web applications using PHP and JavaScript."
    ],
    [
        "job_title" => "Intern",
        "company" => "WebStartups LLC",
        "years" => "Summer 2017",
        "details" => "Assisted in website design and testing."
    ]
];

$skills = ["PHP", "JavaScript", "HTML", "CSS", "MySQL"];

function format_personal_info($info) {
    return sprintf(
        "<h1>%s</h1>
        <p><strong>Email:</strong> %s<br>
        <strong>Phone:</strong> %s<br>
        <strong>Address:</strong> %s</p>",
        htmlspecialchars($info['name']),
        htmlspecialchars($info['email']),
        htmlspecialchars($info['phone']),
        htmlspecialchars($info['address'])
    );
}

function format_education($education) {
    $output = "<h2>Education</h2><ul>";
    foreach ($education as $edu) {
        $output .= sprintf(
            "<li><strong>%s</strong>, %s (%s)</li>",
            htmlspecialchars($edu['degree']),
            htmlspecialchars($edu['school']),
            htmlspecialchars($edu['year'])
        );
    }
    $output .= "</ul>";
    return $output;
}

function format_work_experience($work) {
    $output = "<h2>Work Experience</h2>";
    foreach ($work as $job) {
        $output .= sprintf(
            "<h3>%s at %s <small>(%s)</small></h3>
            <p>%s</p>",
            htmlspecialchars($job['job_title']),
            htmlspecialchars($job['company']),
            htmlspecialchars($job['years']),
            htmlspecialchars($job['details'])
        );
    }
    return $output;
}

function format_skills($skills) {
    return "<h2>Skills</h2><p>" . htmlspecialchars(implode(", ", $skills)) . "</p>";
}

function generate_resume($personal_info, $education, $work_experience, $skills) {
    $resume = "";
    $resume .= format_personal_info($personal_info);
    $resume .= format_education($education);
    $resume .= format_work_experience($work_experience);
    $resume .= format_skills($skills);
    return $resume;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px auto;
            max-width: 700px;
            line-height: 1.6;
            color: #333;
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            border-bottom: 3px solid #4CAF50;
            padding-bottom: 10px;
            color: #4CAF50;
            margin-bottom: 20px;
        }
        h2 {
            color: #2E7D32;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
            margin-top: 30px;
        }
        h3 {
            margin-bottom: 5px;
            margin-top: 20px;
            color: #555;
        }
        small {
            color: #888;
            font-style: italic;
        }
        ul {
            list-style-type: disc;
            margin-left: 20px;
        }
        p {
            margin: 5px 0 15px;
        }
    </style>
</head>
<body>
    <?php 
        echo generate_resume($personal_info, $education, $work_experience, $skills);
    ?>
</body>
</html>
