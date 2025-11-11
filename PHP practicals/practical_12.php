<!DOCTYPE html>
<html>

<head>
    <title>Product Management - Company Database</title>
</head>

<body>
    <h2>Product Management</h2>

    <form method="post">
        <label>Product ID:</label>
        <input type="number" name="pid" required><br><br>

        <label>Product Name:</label>
        <input type="text" name="pname" required><br><br>

        <label>Cost:</label>
        <input type="number" step="0.01" name="cost" required><br><br>

        <label>Units:</label>
        <input type="number" name="units" required><br><br>

        <input type="submit" name="save" value="Save">
        <input type="submit" name="modify" value="Modify">
        <input type="submit" name="delete" value="Delete">
    </form>

    <hr>

    <?php
    // Database connection
    $conn = new mysqli("localhost", "root", "", "company");

    if ($conn->connect_error) {
        die("<h3>Database Connection Failed: " . $conn->connect_error . "</h3>");
    }

    // --- Save Record ---
    if (isset($_POST['save'])) {
        $pid = $_POST['pid'];
        $pname = $_POST['pname'];
        $cost = $_POST['cost'];
        $units = $_POST['units'];

        $sql = "INSERT INTO product (ProductId, ProductName, Cost, Units) VALUES ('$pid', '$pname', '$cost', '$units')";
        if ($conn->query($sql)) {
            echo "<h3>Record Saved Successfully!</h3>";
        } else {
            echo "<h3>Error: " . $conn->error . "</h3>";
        }
    }

    // --- Modify Record ---
    if (isset($_POST['modify'])) {
        $pid = $_POST['pid'];
        $pname = $_POST['pname'];
        $cost = $_POST['cost'];
        $units = $_POST['units'];

        $sql = "UPDATE product SET ProductName='$pname', Cost='$cost', Units='$units' WHERE ProductId='$pid'";
        if ($conn->query($sql)) {
            echo "<h3>Record Updated Successfully!</h3>";
        } else {
            echo "<h3>Error: " . $conn->error . "</h3>";
        }
    }

    // --- Delete Record ---
    if (isset($_POST['delete'])) {
        $pid = $_POST['pid'];

        $sql = "DELETE FROM product WHERE ProductId='$pid'";
        if ($conn->query($sql)) {
            echo "<h3>Record Deleted Successfully!</h3>";
        } else {
            echo "<h3>Error: " . $conn->error . "</h3>";
        }
    }

    // --- Display All Records ---
    echo "<h3>Product Table:</h3>";
    $result = $conn->query("SELECT * FROM product");

    if ($result->num_rows > 0) {
        echo "<table border='1' cellpadding='8'>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Cost</th>
                    <th>Units</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['ProductId']}</td>
                    <td>{$row['ProductName']}</td>
                    <td>{$row['Cost']}</td>
                    <td>{$row['Units']}</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No records found.</p>";
    }

    $conn->close();
    ?>

    <p>Apurva Kumar, 04814902024</p>
</body>
</html>