<!DOCTYPE html>
<html>

<head>
    <title>Favorite Color Cookie</title>
</head>

<body>

    <?php
    // Handle cookie deletion
    if (isset($_POST['delete_cookie'])) {
        setcookie("favorite_color", "", time() - 3600); // Expire the cookie
        echo "<p>Cookie deleted successfully!</p>";
    }

    // Handle form submission to create the cookie
    if (isset($_POST['color'])) {
        $color = $_POST['color'];
        setcookie("favorite_color", $color, time() + (86400 * 30)); // 30 days validity
        echo "<p>Cookie set successfully! Please refresh or revisit the page.</p>";
    }

    // Check if cookie exists
    if (isset($_COOKIE['favorite_color'])) {
        $fav_color = htmlspecialchars($_COOKIE['favorite_color']);
        echo "<h3>Welcome back! Your favorite color is $fav_color.</h3>";
        echo '
        <form method="post">
            <button type="submit" name="delete_cookie">Delete Cookie</button>
        </form>
    ';
    } else {
        // Show form if no cookie is found
        echo '
        <h3>Enter your favorite color:</h3>
        <form method="post">
            <input type="text" name="color" required>
            <button type="submit">Save Color</button>
        </form>
    ';
    }
    ?>

    <p>Apurva Kumar, 04814902024</p>

</body>

</html>