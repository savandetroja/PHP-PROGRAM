<?php
$abstracts = [
    "This research focuses on machine learning techniques applied to natural language processing.",
    "Recent advancements in deep learning have improved many AI applications.",
    "Data mining and big data analytics are essential for modern research.",
    "The impact of artificial intelligence in healthcare is significant."
];

function search_keywords_in_array($texts, $keywords) {
    $results = [];
    foreach ($texts as $index => $text) {
        foreach ($keywords as $keyword) {
            $keyword = trim($keyword);
            if ($keyword === '') continue;
            $pos = stripos($text, $keyword);
            if ($pos !== false) {
                $start = max(0, $pos - 30);
                $length = strlen($keyword) + 60;
                $context = substr($text, $start, $length);
                $context = trim($context);
                $results[$index][$keyword] = "... " . $context . " ...";
            }
        }
    }
    return $results;
}

$found = [];
$input_keywords = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input_keywords = $_POST["keywords"] ?? "";
    $keywords_array = explode(",", $input_keywords);
    $found = search_keywords_in_array($abstracts, $keywords_array);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Keyword Search in Multiple Abstracts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 40px auto;
            background: #fefefe;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        h2 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 8px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: 70%;
            padding: 8px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 8px 15px;
            font-size: 1rem;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }
        button:hover {
            background-color: #2980b9;
        }
        .abstract {
            background: #ecf0f1;
            padding: 15px;
            margin-bottom: 25px;
            border-radius: 6px;
        }
        .keyword {
            font-weight: bold;
            color: #2980b9;
        }
        .context {
            font-style: italic;
            color: #7f8c8d;
            margin-top: 5px;
            display: block;
        }
    </style>
</head>
<body>
    <h2>Keyword Search in Multiple Abstracts</h2>
    <form method="post">
        <input 
            type="text" 
            name="keywords" 
            placeholder="Enter keywords separated by commas" 
            value="<?php echo htmlspecialchars($input_keywords); ?>"
            required
        />
        <button type="submit">Search</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
        <?php if (!empty($found)) : ?>
            <?php foreach ($found as $index => $matches) : ?>
                <div class="abstract">
                    <strong>Abstract #<?php echo $index + 1; ?>:</strong> <?php echo htmlspecialchars($abstracts[$index]); ?>
                    <ul>
                        <?php foreach ($matches as $keyword => $context) : ?>
                            <li>
                                <span class="keyword"><?php echo htmlspecialchars($keyword); ?></span>:
                                <span class="context"><?php echo htmlspecialchars($context); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No keywords found in the abstracts.</p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
