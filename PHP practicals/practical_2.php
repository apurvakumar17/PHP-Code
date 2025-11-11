<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table (Skip Divisible by 4)</title>
</head>
<body>
    <form method="post">
        Enter a number: <input type="number" name="num" required>
        <input type="submit" value="Generate Table">
    </form>

    <?php
    if (isset($_POST['num'])) {
        $N = $_POST['num'];

        echo "<h3>Multiplication Table of $N (Skipping products divisible by 4)</h3>";

        for ($i = 1; $i <= 10; $i++) {
            $product = $N * $i;
            if ($product % 4 == 0) {
                continue; // Skip if product divisible by 4
            }
            echo "$N × $i = $product <br>";
        }
    }
    ?>

    <p>Apurva Kumar, 04814902024</p>
</body>
</html>