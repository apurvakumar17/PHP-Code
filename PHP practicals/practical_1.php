<!DOCTYPE html>
<html>
<head>
    <title>Even Factorial Calculator</title>
</head>
<body>
    <form method="post">
        Enter a number: <input type="number" name="num" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['num'])) {
        $N = $_POST['num'];
        $fact = 1;

        for ($i = 2; $i <= $N; $i++) {
            if ($i % 2 == 0) {
                $fact *= $i;
            }
        }

        echo "<h3>Factorial of even numbers up to $N is: $fact</h3>";
    }
    ?>

    <p>Apurva Kumar, 04814902024</p>
</body>
</html>