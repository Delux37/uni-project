<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
<?php

        $server = "localhost";
        $user = "root";
        $pass = "";
        $database = "tours";

        $con = mysqli_connect($server, $user, $pass, $database);

        
        if(isset($_POST['upload'])){
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $email = $_POST["mail"];
            $phone = $_POST["phone"];
            $age = $_POST["age"];
            // INSERT INTO `tours` (`id`, `name`, `surname`, `email`, `phone`, `age`) VALUES (NULL, '', '', '', '', '')
            $upload = "INSERT INTO 
            `tours` (`id`, `name`, `surname`, `email`, `phone`, `age`)
             VALUES (NULL, '$name', '$surname', '$email', '$phone', '$age')";

            mysqli_query($con, $upload);
            
        }

    ?>
<form class="contact" method="post" action="contact.php">
        <i class="fas fa-mail-bulk fa-10x icon"></i>
        <div class="container">
            <label for="name" id="name" class="temp"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="surname" id="surname"><b>Surname</b></label>
            <input type="text" placeholder="Enter Surname" name="surname" required>
            
            <label for="mail" id="mail"><b>Mail</b></label>
            <input type="email" placeholder="Enter Email" name="mail" required>

            <label for="phone" id="phone"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone" name="phone" required>

            <label for="age" id="age"><b>Age</b></label>
            <input type="text" placeholder="Enter Age" name="age"required>
            <button type="submit" name="upload" class="btn">Register on tours</button>
        </div>
    </form>
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
</body>
</html>