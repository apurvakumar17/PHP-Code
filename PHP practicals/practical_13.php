<!DOCTYPE html>
<html>
<head>
<title>Regex Demo</title>
</head>
<body>
<h2>Modifiers, Operators and Metacharacters.</h2>

<form method="post">
  <textarea name="text" rows="5" cols="40" placeholder="Enter text here"><?php 
    echo isset($_POST['text']) ? htmlspecialchars($_POST['text']) : "John.Doe@example.com\njane_doe@domain.co.in\n123-456-7890"; 
  ?></textarea><br><br>
  <input type="submit" value="Test Regex">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];

    // Regular expression using metacharacters, operators, and modifiers
    $pattern = '/([a-z0-9._%+-]+)@([a-z0-9.-]+\.[a-z]{2,})/i';
    // Explanation:
    // [] → character class
    // +  → one or more (operator)
    // () → grouping
    // \. → literal dot (metacharacter)
    // /i → modifier (case-insensitive)

    echo "<h3>Pattern:</h3><pre>$pattern</pre>";

    if (preg_match_all($pattern, $text, $matches)) {
        echo "<h3>Matches Found:</h3><ul>";
        foreach ($matches[0] as $match) {
            echo "<li>$match</li>";
        }
        echo "</ul>";
    } else {
        echo "<p><b>No matches found.</b></p>";
    }

    // Example of preg_replace
    $masked = preg_replace($pattern, '***@\\2', $text);
    echo "<h3>After Replacement:</h3><pre>$masked</pre>";
}
?>

<p><b>Modifiers:</b> i (ignore case) <br>
<b>Operators:</b> +, (), [] <br>
<b>Metacharacters:</b> ., \d, \w, \s, ^, $ etc.</p>

<p><small>Apurva Kumar, 04814902024</small></p>
</body>
</html>
