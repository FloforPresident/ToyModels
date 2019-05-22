<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/index-style.css">

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/login.js"></script>


        <meta charset="utf-8"> 

        <?php include "connect.php"; ?>
        <?php include "header.php" ?>
    </head>
    <body>  
    <script type="text/javascript">
        loggedIn();
    </script>
        <main>
            <h1>Welcome <?php echo $_SESSION['login_user'] ?> to ToyModels</h1>
            <h2>Have a look what we have to offer</h2>
            <a href="index.php">CONTINUE</a>
        </main>
    </body>
</html>
