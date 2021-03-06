<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <title>Title</title>
</head>
<body>

<nav>
    <div class="logo">
        <h4>The Nav</h4>
    </div>
    <ul class="links">
        <li><a href="#home">Home</a></li>
        <li><a href="#tours">Tours</a></li>
        <li><a href="#aboutUs">About Us</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="contact/contact.php">Contact</a></li>
        <li><a href="login/login.php">Log in</a></li>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>



<!--pirveli sekcia-->
<div class="bg-image" id="home">
    <div class="bg-text">
        <h1>Welcome to our website!</h1>
        <button>See more</button>
    </div>
</div>



<!--meore sekcia-->
<div class="center" id="tours">
    <h1 class="aboutUs">Tours</h1>
    <div class="line"></div>
</div>
<div class="wrapper">
    <div class="carousel owl-carousel">
        <div class="card card-1">GEORGIA</div>
        <div class="card card-2">SPAIN</div>
        <div class="card card-3">FRANCE</div>
        <div class="card card-4">CZECHIA</div>
        <div class="card card-5">HOLLAND</div>
    </div>
</div>

<!--mesame sekcia-->

<div class="center" id="aboutUs">
    <h1 class="aboutUs">About Us</h1>
    <div class="line"></div>
</div>
<div class="aboutUs-content">
    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
    </p>
</div>

<!--meotxe sekcia-->
<div class="center" id="gallery">
    <h1 class="aboutUs">Gallery</h1>
    <div class="line"></div>
</div>
<div class="grid-container">
    <div class="item-1"></div>
    <div class="item-2"></div>
    <div class="item-3"></div>
    <div class="item-4"></div>
    <div class="item-5"></div>
    <div class="item-6"></div>
    <div class="item-7"></div>
    <div class="item-8"></div>
    <div class="item-9"></div>
    <div class="item-10"></div>
</div>

<!--mexute sekcia-->
<div class="center" id="contact">
    <h1 class="aboutUs">Contact</h1>
    <div class="line"></div>
</div>



<!--meekvse sekcia-->
<footer>
    <div class="contact">
        <i class="fas fa-mail-bulk fa-10x icon"></i>
        <div class="container">
            <label for="name" id="name"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="name" required>

            <label for="mail" id="mail"><b>Mail</b></label>
            <input type="email" placeholder="Enter Email" name="mail" required>

            <label for="psw" id="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw" id="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw-repeat" required>
            <button type="submit" class="btn">Login</button>
        </div>
    </div>
    <div>
        <hr>
        <div class="icons">
            <a href="#">
                <div class="fb-icon">
                    <i class="fab fa-facebook-f"></i>
                </div>
            </a>
            <a href="#">
                <div class="twitter-icon">
                    <i class="fab fa-twitter"></i>
                </div>
            </a>
            <a href="#">
                <div class="ln-icon">
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </a>
            <a href="#">
                <div class="google-icon">
                    <i class="fab fa-google-plus-g"></i>
                </div>
            </a>
            <a href="#">
                <div class="github-icon">
                    <i class="fab fa-github"></i>
                </div>
            </a>
        </div>
    </div>
</footer>


<script src="script.js"></script>
</body>
</html>