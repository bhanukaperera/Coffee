<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coffee.</title>

  <link rel="stylesheet" href="style.css">
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
        <li><a href="#">Home</a></li>
        <li><a href="./products.php">Products</a></li>
        <li><a href="./about.php">About us</a></li>
        <li><a href="./contact.php">Contact us</a></li>
        <b><li><a href="./signin.php">SIGN IN</a></li></b>
      </ul>
      <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
    </nav>
  </header>

  <section class="hero-section">
    <div class="content">
      <h2>Start Your Day With Fresh Coffee</h2>
      <p>
        Coffee is a popular and beloved beverage enjoyed by people around the world. Awaken your senses with a steaming cup of liquid motivation.
      </p>
      <button onclick="window.location.href='products.php'">Order Now</button>
    </div>
  </section>

  <!-- footer section -->
  <div class="footer">
    <div class="footer-contentf">
      <img src="./pics/logo.png" alt="" srcset="" class="flogo">
    </div>

    <div class="footer-icons">
      <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
      <a href="#" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
      <a href="#" target="_blank"><i class="fa-solid fa-envelope"></i></a>
    </div>

    <div class="footer-links">
      <a href="./index.php">Home</a>
      <a href="./products.php">Products</a>
      <a href="./contact.php">Contact Us</a>
    </div>

    <div class="footer-copyRight">&#169; Bhanuka Perera</div>
      <br>    
</div>

<!-- Created and edited by Bhanuka Perera  -->

  
  <style>
    .footer-copyRight {
      color: #ffffff;
    }

    .location-text {
      color: #ffffff;
    }

    .slogan-text {
      font-size: xx-large;
      color: #ffffff;
    }
  </style>

</body>

</html>
