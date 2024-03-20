<?php
// Start the session
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the product and new price are set in the POST request
if (isset($_POST['product']) && isset($_POST['new_price'])) {
    $product = $_POST['product'];
    $newPrice = $_POST['new_price'];

    // Update the price in the database
    $sql = "UPDATE products SET price = '$newPrice' WHERE product = '$product'";
    if ($conn->query($sql) === TRUE) {
        echo "Price updated successfully";
    } else {
        echo "Error updating price: " . $conn->error;
    }
} else {
    echo "Product and new price not provided";
}

$conn->close();
?>

<!-- Created and edited by Bhanuka Perera  -->