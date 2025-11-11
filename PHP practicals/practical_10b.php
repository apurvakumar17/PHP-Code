<!DOCTYPE html>
<html>

<head>
    <title>Checkout Page</title>
</head>

<body>

    <?php
    if (isset($_GET['name']) && isset($_GET['price'])) {
        $productName = $_GET['name'];
        $productPrice = $_GET['price'];
        echo "<h2>Checkout</h2>";
        echo "<p>Product: <b>$productName</b></p>";
        echo "<p>Price: ₹$productPrice</p>";
    ?>

        <form method="post">
            <label for="qty">Enter Quantity:</label>
            <input type="number" name="qty" min="1" value="1" required><br><br>

            <!-- Hidden field to carry product price -->
            <input type="hidden" name="price" value="<?php echo $productPrice; ?>">

            <button type="submit" name="submit">Calculate Total</button>
        </form>

    <?php
        // If form is submitted, calculate total
        if (isset($_POST['submit'])) {
            $quantity = $_POST['qty'];
            $price = $_POST['price'];
            $total = $price * $quantity;
            echo "<h3>Total Bill Amount: ₹$total</h3>";
        }
    } else {
        echo "<p>No product selected! Go back to <a href='products.php'>Products Page</a>.</p>";
    }
    ?>

    <p>Apurva Kumar, 04814902024</p>

</body>

</html>