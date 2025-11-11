<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Example - Page 1</title>
</head>
<body>

<h2>Enter Your Details</h2>
<form action="practical_9b.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>

    <button type="submit">Submit</button>
</form>


<p>Apurva Kumar, 04814902024</p>

</body>
</html>