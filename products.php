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

// Fetch the price for the product "Cappuccino" from the database
$sql = "SELECT price FROM products WHERE product = 'cappucino'";
$result = $conn->query($sql);

// Check if the query returned any results
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $cappuccinoPrice = $row["price"];
} else {
    $cappuccinoPrice = "Price not available";
}

$sql = "SELECT price FROM products WHERE product = 'latte'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $lattePrice = $row["price"];
} else {
    $Price = "Price not available";
}

/* Continue the same code for other products aswell too work */

$conn->close();
?>


<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coffee. </title>
<link rel="stylesheet" href="productss.css">
<script src="./products.js"></script>
<!-- Google Fonts Links For Icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
<!-- Libries -->
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
          <b><li><a href="#">SIGN IN</a></li></b>
        </ul>
      </nav>
</header>

<br>
<br>
<br>
<br>
<br>
<br>

<div class="divider">
  <div class="left">
    <div class="box one">
      <!-- Card 1 content here -->
      <div class="container">
    <div class="box one">
      <div class="details">
        <div class="topic">Cappuccino.</div>
        <br>
        <p>Experience the perfect blend of rich espresso, creamy steamed milk, and velvety foam in our classic cappuccino. Indulge in coffee perfection with every sip.</p>
        <br>        
        <div class="rating">
        <i class="fa-solid fa-star" style="color: #000000;"></i>
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        </div>
          <div class="price-box">
          <div class="price-box">
          <div class="price">LKR <?php echo $cappuccinoPrice; ?></div>
        </div>

        </div>
    </div>
      <div class="button1">        
      <button onclick="openPdf()"><i class="fa-solid fa-mug-hot"></i> Order</button> 
    </div>
    </div>
    <div class="box two">
      <div class="image-box">
        <div class="image">
          <img src="./pics/cappucino.png" alt="">
        </div>
        <div class="info">
        <a class="logo1" href="#">Coffee<span>.</span></a>          
        <div class="name">CAPPUCINO</div>
          <br>
          <br>
        </div>
      </div>
    </div>
    </div>
    </div>
  </div>

  <script>
        function openPdf() {
            // Define the URL of the PDF file
            var pdfUrl = 'pdf/cappucino.pdf';
            // Open the PDF file in a new tab
            window.open(pdfUrl, '_blank');
        }
    </script>

<style>
  .logo1 {
    color: #fff;
    font-weight: 600;
    font-size: 2.1rem;
    text-decoration: none;
  }
  .logo1 span {
  color: #C06B3E;
}

</style>

  <br>
  <br>
  <br>
  <br>

  <div class="right">
    <div class="box two">
      <!-- Card 2 content here -->
      <div class="container">
    <div class="box one">
      <div class="details">
        <div class="topic">Latte.</div>
        <br>
        <p>Discover the epitome of coffee luxury with our signature latte. Immerse yourself in the steamed milk harmoniously blended with rich espresso. </p>
        <br>
        <div class="rating">
        <i class="fa-solid fa-star" style="color: #000000;"></i>
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        </div>
          <div class="price-box">
          <div class="price">LKR <?php echo $lattePrice; ?></div>
        </div>
          
      </div>
      <div class="button1">
      <button onclick="openPdf1()"><i class="fa-solid fa-mug-hot"></i> Order</button> 
      </div>
    </div>
    <div class="box two">
      <div class="image-box">
        <div class="image">
          <img src="./pics/latte.png" alt="">
        </div>
        <div class="info">
        <a class="logo1" href="#">Coffee<span>.</span></a>          
        <div class="name">LATTE</div>
          <br>
          <br>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
</div>

<script>
        function openPdf1() {
            // Define the URL of the PDF file
            var pdfUrl = 'pdf/latte.pdf';
            // Open the PDF file in a new tab
            window.open(pdfUrl, '_blank');
        }
    </script>

<br>
<br>
<br>

<div class="divider">
  <div class="left">
    <div class="box one">
      <!-- Card 3 content here -->
      <div class="container">
    <div class="box one">
    <div class="details">
        <div class="topic">Mocha.</div>
        <br>
        <p>Treat yourself with rich espresso, decadent chocolate, and creamy steamed milk in mocha. Savor the  balanced sweetness and bold coffee flavor in every sip.</p>
        <br>
        <div class="rating">
        <i class="fa-solid fa-star" style="color: #000000;"></i>
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        </div>
          <div class="price-box">
          <div class="price">LKR 900.00</div>
        </div>
          
      </div>
      <div class="button1">
      <button><i class="fa-solid fa-mug-hot"></i>  Order</button>
      </div>
    </div>
    <div class="box two">
    <div class="image-box">
        <div class="image">
          <img src="./pics/mocha.png" alt="">
        </div>
        <div class="info">
        <a class="logo1" href="#">Coffee<span>.</span></a>          
        <div class="name">MOCHA</div>
          <br>
          <br>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>

  <br>
  <br>
  <br>
  <br>

  <div class="right">
    <div class="box two">
      <!-- Card 4 content here -->
      <div class="container">
    <div class="box one">
    <div class="details">
        <div class="topic">Americano.</div>
        <br>
        <p>
        The Americano is a classic coffee beverage made by diluting espresso with hot water. It offers a bold flavor and smooth finish, perfect for any time of day.</p>
        <br>
        <div class="rating">
        <i class="fa-solid fa-star" style="color: #000000;"></i>
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        <i class="fa-solid fa-star" style="color: #000000;"></i> 
        </div>
          <div class="price-box">
          <div class="price">LKR 1500.00</div>
        </div>
          
      </div>
      <div class="button1">
      <button><i class="fa-solid fa-mug-hot"></i>  Order</button>
      </div>
    </div>
    <div class="box two">
    <div class="image-box">
        <div class="image">
          <img src="./pics/americano.png" alt="">
        </div>
        <div class="info">
        <a class="logo1" href="#">Coffee<span>.</span></a>          
        <div class="name">AMERICANO</div>
          <br>
          <br>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
</div>

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

<style>
  .divider {
    display: flex;
    max-width: 100%;
  }
  
  .box {
    flex: 1;
    margin: 0 10px;
  }
  
</style>
</body>
</html>
