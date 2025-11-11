<?php
session_start();

// Store form data in session variables
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Example - Page 2</title>
</head>
<body>

<?php
if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
    echo "<h3>Hello " . $_SESSION['name'] . 
         ", your email is " . $_SESSION['email'] . ".</h3>";
} else {
    echo "<p>No session data found. Please go back and enter your details.</p>";
    echo '<a href="practical_9a.php">Go to Page 1</a>';
}
?>


<p>Apurva Kumar, 04814902024</p>

</body>
</html>
