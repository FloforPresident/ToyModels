<!DOCTYPE html>
<html>
<?php session_start();?>
    <head>
        <title>Bestätigung Registrierung</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/register-style.css">

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script src="js/main.js"></script>
        <meta charset="utf-8"> 
        <?php include "connect.php"?>

        <script>
            window.onload = function() {
                hideLogin();
            };
            function hideLogin(){
                document.getElementById("signIn").style.display = "none";
            }
        </script>
    </head>
    <body>

        
    <?php include "header.php" ?>


    <main>
            <?php
            $name = trim(stripslashes($_POST["name"]));
            $vorname = trim(stripslashes($_POST["vorname"]));
            $email = trim(stripslashes($_POST["emailwiederholen"]));

            echo ("
                    <p><h1>Danke für Ihre Registrierung " . $vorname . "!<br>Sie haben gerade Ihre Seele verkauft.</h1></p>
                ");

            $statement = $pdo->prepare("INSERT INTO kunden (Nachname, Vorname, Email) VALUES (?, ?, ?)");
            $statement->execute(array("$name", "$vorname", "$email"));

            $statement2 = $pdo->prepare("SELECT KundenNr FROM kunden WHERE Nachname = ?");
            $statement2->execute(array($name));   
            $row = $statement2->fetch();
             echo ("Ihre Kundennummer für die Anmeldung lautet " . $row['KundenNr'] . "<br><br>");
            ?>

            <a href="index.php"><button>Startseite</button></a>
    </main>

     <?php include "footer.php" ?>
    </body>
</html>