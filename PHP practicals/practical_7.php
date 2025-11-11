<!DOCTYPE html>
<html>
<head>
    <title>Login Form (POST Method)</title>
</head>
<body>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>

    <?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === "admin" && $password === "12345") {
            echo "<h3>Login Successful ✅</h3>";
        } else {
            echo "<h3>Invalid Username or Password ❌</h3>";
        }
    }
    ?>

    <p>Apurva Kumar, 04814902024</p>
</body>
</html>
