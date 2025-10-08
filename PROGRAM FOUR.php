<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="num">
        <button type="submit" name="sub">Send</button>
    </form><br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['num'];

        if ($num == '1') {
            echo "Month with if else Statement : January<br>";
        } else if ($num == '2') {
            echo "Month with if else Statement : February<br>";
        } else if ($num == '3') {
            echo "Month with if else Statement : March<br>";
        } else if ($num == '4') {
            echo "Month with if else Statement : April<br>";
        } else if ($num == '5') {
            echo "Month with if else Statement : May<br>";
        } else if ($num == '6') {
            echo "Month with if else Statement : June<br>";
        } else if ($num == '7') {
            echo "Month with if else Statement : July<br>";
        } else if ($num == '8') {
            echo "Month with if else Statement : August<br>";
        } else if ($num == '9') {
            echo "Month with if else Statement : September<br>";
        } else if ($num == '10') {
            echo "Month with if else Statement : October<br>";
        } else if ($num == '11') {
            echo "Month with if else Statement : November<br>";
        } else if ($num == '12') {
            echo "Month with if else Statement : December<br>";
        } else {
            echo "Invalid number";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['num'];

    switch($num) {
        case '1':
            echo "Month with if switch case Statement : January<br>";
            break;
        case '2':
            echo "Month with if  switch case Statement : February<br>";
            break;
        case '3':
            echo "Month with if  switch case Statement : March<br>";
            break;
        case '4':
            echo "Month with if switch case Statement : April<br>";
            break;
        case '5':
            echo "Month with if switch case Statement : May<br>";
            break;
        case '6':
            echo "Month with if switch case Statement : June<br>";
            break;
        case '7':
            echo "Month with if switch case Statement : July<br>";
            break;
        case '8':
            echo "Month with if switch case Statement : August<br>";
            break;
        case '9':
            echo "Month with if switch case Statement : September<br>";
            break;
        case '10':
            echo "Month with if switch case Statement : October<br>";
            break;
        case '11':
            echo "Month with if switch case Statement : November<br>";
            break;
        case '12':
            echo "Month with if switch case Statement : December<br>";
            break;
        default:
            echo "Invalid number";
        }    
    }   

    ?>
</body>
</html>
