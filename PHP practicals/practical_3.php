<!DOCTYPE html>
<html>
<head>
    <title>Reverse a Number</title>
</head>
<body>
    <form method="post">
        Enter a number: <input type="number" name="num" required>
        <input type="submit" value="Reverse">
    </form>

    <?php
    if (isset($_POST['num'])) {
        $num = $_POST['num'];

        if ($num < 0) {
            echo "<h3>Please enter a positive number. ($num)</h3>";
        } else {
            $rev = 0;
            $n = $num;

            while ($n > 0) {
                $digit = $n % 10;
                $rev = ($rev * 10) + $digit;
                $n = (int)($n / 10);
            }

            echo "<h3>Reverse of $num is: $rev</h3>";
        }
    }
    ?>

    <p>Apurva Kumar, 04814902024</p>
</body>
</html>
