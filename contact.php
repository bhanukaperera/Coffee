<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coffee.</title>

<!-- Google Fonts Links For Icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">

<script src="https://kit.fontawesome.com/0f25ef0030.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="contact.css">

<script src="contact.js"></script>

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
        <b><li><a href="./signin.php">SIGN IN</a></li></b>
    </ul>
    <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
    </nav>
</header>



<br>
<br>
<br>
<br>
<br>

<div class="container">
    <div class="content">
        <div class="left-side">
        <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Address</div>
            <div class="text-one">NO 17, Main Rd</div>
            <div class="text-two">Negombo, Sri Lanka</div>
        </div>
        <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Phone</div>
            <div class="text-one">011 564 4565</div>
            <div class="text-two">077 228 5075</div>
        </div>
        <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">Coffee@gmail.com</div>
        </div>
        </div>
        
        <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <form action="#">
        <br>
        <div class="input-box">
            <input type="text" placeholder="Enter your name" >
        </div>
        <div class="input-box">
            <input type="text" placeholder="Enter your email" >
        </div>
        <div class="input-box message-box">
            <input type="text" placeholder="Write to us">
        </div>
        <div class="button">
            <input type="button" value="Send Now" id="sendButton">
        </div>
        </form>
    </div>
    </div>
</div>

<style> .input-box input { color: white; } </style>



<div class="popup" id="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <p>Thank you for sending your message !</p>
    </div>
</div>


<br>
<br>
<br>
<br>
 <script>
    document.addEventListener('DOMContentLoaded', function() {
  var sendButton = document.getElementById('sendButton');
  var popup = document.getElementById('popup');
  var nameInput = document.querySelector('.input-box input[placeholder="Enter your name"]');
  var emailInput = document.querySelector('.input-box input[placeholder="Enter your email"]');
  var messageInput = document.querySelector('.input-box.message-box input');

  if (sendButton && popup) {
      sendButton.addEventListener('click', function() {
          if (nameInput.value.trim() === '' || emailInput.value.trim() === '' || messageInput.value.trim() === '') {
              alert('Please fill in all fields before sending.');
          } else {
              popup.style.display = 'flex';
              setTimeout(function() {
                  closePopup();
                  clearFields(); // Clear fields after sending
              }, 1000);
          }
      });
  }

  function closePopup() {
      popup.style.display = 'none';
  }

  function clearFields() {
      nameInput.value = '';
      emailInput.value = '';
      messageInput.value = '';
  }
});
 </script>

<!--footer-->
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
        <a href="./manuals.php">Products</a>
        <a href="./about.php">Contact Us</a>
        <br>
        <br>
    </div>
      <div class="footer-copyRight">&#169; Bhanuka Perera</div>
      <br>    
</div>

<!-- Created and edited by Bhanuka Perera  -->


<script>
    
</script>


</body>