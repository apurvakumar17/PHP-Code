<!DOCTYPE html>
<html>
<head>
    <title>Triangular Pattern (Skip Primes)</title>
</head>
<body>
    <form method="post">
        Enter number of rows: <input type="number" name="rows" required>
        <input type="submit" value="Print Pattern">
    </form>

    <?php
    // Function to check if a number is prime
    function isPrime($n) {
        if ($n <= 1) return false;
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) return false;
        }
        return true;
    }

    if (isset($_POST['rows'])) {
        $rows = $_POST['rows'];
        $num = 1;

        echo "<h3>Triangular Pattern (Skipping Prime Numbers)</h3>";

        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                if (isPrime($num)) {
                    $num++;
                    continue; 
                }
                echo $num . " ";
                $num++;
            }
            echo "<br>";
        }
    }
    ?>

    <p>Apurva Kumar, 04814902024</p>
</body>
</html>
