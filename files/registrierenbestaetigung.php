<!DOCTYPE html>
<html>
    <head>
        <title>Bestätigung Registrierung</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/register-style.css">

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script src="js/main.js"></script>
        <meta charset="utf-8"> 
        <?php include "connect.php"; ?>
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
                    ;");

            $statement = $pdo->prepare("INSERT INTO kunden (Nachname, Vorname, Email) VALUES (?, ?, ?)");
            $statement->execute(array("$name", "$vorname", "$email"));
            ?>
    </main>

     <?php include "footer.php" ?>
    </body>
</html>