<?php
// Start session and handle cookies
$name = $email = $phone = $size = $quantity = "";
$toppings = [];
$errors = [];
$orderBooked = false;

// If cookies exist, prefill user details
if (isset($_COOKIE['name'])) $name = $_COOKIE['name'];
if (isset($_COOKIE['email'])) $email = $_COOKIE['email'];
if (isset($_COOKIE['size'])) $size = $_COOKIE['size'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize inputs
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $size = $_POST['size'] ?? "";
    $toppings = $_POST['toppings'] ?? [];
    $quantity = $_POST['quantity'];

    // --- Validation ---
    if (empty($name) || !preg_match("/^[A-Za-z ]+$/", $name))
        $errors[] = "Name is required and must contain only alphabets.";

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
        $errors[] = "Valid email is required.";

    if (empty($phone) || !preg_match("/^[0-9]{10}$/", $phone))
        $errors[] = "Phone number must be 10 digits.";

    if (empty($size))
        $errors[] = "Please select a pizza size.";

    if (empty($toppings))
        $errors[] = "Please select at least one topping.";

    if (!is_numeric($quantity) || $quantity <= 0)
        $errors[] = "Quantity must be a number greater than 0.";

    // If no validation errors → Book order
    if (empty($errors)) {
        $orderBooked = true;

        // Store user details in cookies for 30 days
        setcookie("name", $name, time() + (86400 * 30));
        setcookie("email", $email, time() + (86400 * 30));
        setcookie("size", $size, time() + (86400 * 30));
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Pizza Order Form</title>
</head>

<body>

    <h2>Pizza Order Form</h2>

    <?php
    // If order booked successfully
    if ($orderBooked) {
        echo "<h3 style='color:green;'>Order Booked Successfully!</h3>";
        echo "<p>Thank you, <b>$name</b>! Your $size pizza order has been placed.</p>";
    } else {
        // Display errors if any
        if (!empty($errors)) {
            echo "<ul style='color:red;'>";
            foreach ($errors as $err) echo "<li>$err</li>";
            echo "</ul>";
        }
    ?>

        <form method="post">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" required><br><br>

            <label>Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required><br><br>

            <label>Phone:</label>
            <input type="text" name="phone" value="<?php echo htmlspecialchars($phone); ?>" required><br><br>

            <label>Pizza Size:</label>
            <select name="size" required>
                <option value="">--Select Size--</option>
                <option value="Small" <?php if ($size == "Small") echo "selected"; ?>>Small</option>
                <option value="Medium" <?php if ($size == "Medium") echo "selected"; ?>>Medium</option>
                <option value="Large" <?php if ($size == "Large") echo "selected"; ?>>Large</option>
            </select><br><br>

            <label>Toppings:</label><br>
            <input type="checkbox" name="toppings[]" value="Cheese" <?php if (in_array("Cheese", $toppings)) echo "checked"; ?>> Cheese<br>
            <input type="checkbox" name="toppings[]" value="Pepperoni" <?php if (in_array("Pepperoni", $toppings)) echo "checked"; ?>> Pepperoni<br>
            <input type="checkbox" name="toppings[]" value="Mushroom" <?php if (in_array("Mushroom", $toppings)) echo "checked"; ?>> Mushroom<br>
            <input type="checkbox" name="toppings[]" value="Olives" <?php if (in_array("Olives", $toppings)) echo "checked"; ?>> Olives<br><br>

            <label>Quantity:</label>
            <input type="number" name="quantity" value="<?php echo htmlspecialchars($quantity); ?>" min="1" required><br><br>

            <button type="submit">Place Order</button>
        </form>

    <?php
    }
    ?>

    <p>Apurva Kumar, 04814902024</p>

</body>

</html>