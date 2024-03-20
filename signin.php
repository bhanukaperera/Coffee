<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee.</title>
    <!-- Google Fonts Links For Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <script src="https://kit.fontawesome.com/0f25ef0030.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="sign.css">
    <style>
        /* Additional styling can be added here */
    </style>
    <script src="./signin.js"></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <a class="logo" href="#">Coffee<span>.</span></a>
            <ul class="menu-links">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./products.php">Products</a></li>
                <li><a href="./about.php">About us</a></li>
                <li><a href="./contact.php">Contact us</a></li>
            </ul>
        </nav>
    </header>

    <br><br><br><br><br><br><br><br>

    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="./pics/bg.png" alt="">
                <div class="text">
                    <a class="logo1" href="#">Coffee<span>.</span></a>          
                    <span class="text-2">Moments Made Better</span>
                </div>
            </div>
            <div class="back">
                <img src="./pics/bg.png" alt="">
                <div class="text"></div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <form action="admin.php" method="post" onsubmit="return validateForm()">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope" style="color: #C06B3E;"></i>
                                <input type="text" placeholder="Enter your email" name="username" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock" style="color: #C06B3E;"></i>
                                <input type="password" placeholder="Enter your password" name="password" required>
                            </div>
                            <div class="text"><a href="#">Forgot password?</a></div>
                            <div class="button input-box">
                                <input type="submit" value="Submit">
                            </div>
                            <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br>

    <script>
        function validateForm() {
            var username = document.querySelector('.input-box input[name="username"]').value;
            var password = document.querySelector('.input-box input[name="password"]').value;

            if (username.trim() === "" || password.trim() === "") {
                alert("Please enter both username and password");
                return false;
            }
            return true;
        }
    </script>

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
    </div>

    <!-- Created and edited by Bhanuka Perera  -->

</body>
</html>
