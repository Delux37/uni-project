<?php 

session_start();

if (!isset($_SESSION['name'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-styles.css">
    <title>Admin</title>
</head>
<body>
    <div class="admin__header">
        <?php echo "<h1 >Welcome " . $_SESSION['name'] . "view registered users:</h1>"; ?>
        <a href="logout.php">Logout</a>
    </div>
    <div class="admin__container">
    <div class='admin__participant--card template'">
        <p>name</p>
        <p>surname</p>
        <p>email</p>
        <p>phone</p>
        <p>age</p>
    </div>
    <?php
        $host ='localhost';
        $user = 'root';
        $pass = '';
        $db = 'tours';
        $con = mysqli_connect($host,$user,$pass,$db);

        $sql = 'select * from tours';

        $result = mysqli_query($con, $sql);
        
        while($row = mysqli_fetch_array($result)){
            echo "<div class='admin__participant--card'>";
                echo "<p>".$row['name']."</p>";
                echo '<p>'.$row['surname'].'</p>';
                echo '<p>'.$row['email'].'</p]>';
                echo '<p>'.$row['phone'].'</p>';
                echo '<p>'.$row['age'].'</p>';
            echo "</div>";

        }
    ?>
    </div>
</body>
</html>