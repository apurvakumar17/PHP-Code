<!DOCTYPE html>
<html>
<head>
    <title>Sum of Odd Digits</title>
</head>
<body>
    <form method="post">
        Enter a number: <input type="number" name="num" required>
        <input type="submit" value="Find Sum">
    </form>

    <?php
    if (isset($_POST['num'])) {
        $num = $_POST['num'];

        if ($num < 0) {
            echo "<h3>Please enter a positive number.</h3>";
        } else {
            $sum = 0;
            $n = $num;

            while ($n > 0) {
                $digit = $n % 10;
                if ($digit % 2 != 0) { // Check if odd
                    $sum += $digit;
                }
                $n = (int)($n / 10);
            }

            echo "<h3>Sum of odd digits in $num is: $sum</h3>";
        }
    }
    ?>

    <p>Apurva Kumar, 04814902024</p>
</body>
</html>
