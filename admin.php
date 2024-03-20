<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee. </title>
    <link rel="stylesheet" href="admin.css">
    
    <script src="./admin.js"></script>

    <!-- Google Fonts Links For Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <script src="https://kit.fontawesome.com/0f25ef0030.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar">
            <a class="logo" href="#">Coffee<span>.</span></a>
            <ul class="menu-links">
                <span id="close-menu-btn" class="material-symbols-outlined">close</span>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./products.php">Products</a></li>
                <li><a href="./about.php">About us</a></li>
                <li><a href="./contact.php">Contact us</a></li>
                <li><a ><b>ADMIN</b></a></li>
            </ul>
        </nav>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

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

// Fetch prices for each product from the database
$sql = "SELECT product, price FROM products";
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Start table
    echo '<table>';
    echo '<tr>';
    echo '<th>Product</th>';
    echo '<th>Price</th>';
    echo '<th>Update</th>';
    echo '<th>Delete</th>';
    echo '</tr>';

    // Output data
    while ($row = $result->fetch_assoc()) {
        $product = $row["product"];
        $price = $row["price"];
        echo '<tr>';
        echo '<td style="color: white;">' . $product . '</td>';
        echo '<td><input type="text" name="new_price_' . strtolower($product) . '" value="' . $price . '"></td>';
        echo '<td><button onclick="updatePrice(\'' . $product . '\')">Update</button></td>';
        echo '<td><button onclick="deleteProduct(\'' . $product . '\')">Delete</button></td>';
        echo '</tr>';
    }


    echo '</table>';
} else {
    echo "0 results";
}

$conn->close();
?>


<br>
<br>
<br>
<br>
<br>


    <!-- footer section -->
    <div class="footer">
        <div class="footer-contentf">
            <br>
            <img src="./pics/logo.png" alt="" srcset="" class="flogo">
        </div>
        <div class="footer-icons">
            <br>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#" target="_blank"><i class="fa-solid fa-envelope"></i></a>
        </div>
        <br>
        <div class="footer-links">
            <a href="./index.php">Home</a>
            <a href="./products.php">Products</a>
            <a href="./contact.php">Contact Us</a>
            <br>
            <br>
        </div>
        <div class="footer-copyRight">&#169; Bhanuka Perera</div>
      <br>    
</div>

<!-- Created and edited by Bhanuka Perera  -->


</body>

</html>







