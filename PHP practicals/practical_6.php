<!DOCTYPE html>
<html>
<head>
    <title>User Details Form (GET Method)</title>
</head>
<body>
    <form method="get">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Age:</label>
        <input type="number" name="age" required><br><br>

        <label>City:</label>
        <input type="text" name="city" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['city'])) {
        $name = $_GET['name'];
        $age = $_GET['age'];
        $city = $_GET['city'];

        echo "<h3>User Details:</h3>";
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
        echo "City: " . $city . "<br>";
    }
    ?>

    <p>Apurva Kumar, 04814902024</p>
</body>
</html>
