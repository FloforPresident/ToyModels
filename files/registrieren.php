<!DOCTYPE html>
<html>
    <head>
        <title>Hier Registrieren</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/register-style.css">
        <meta charset="utf-8"> 
    </head>
    <body>

        <?php include "header.php" ?>
        
        <main>
            <a href="index.php">&lt;&lt;&nbsp;Zurück zu unserem Angebot</a>
            <h1>Hi ich bin Stefan, du kannst dich hier Registrieren</h1>
            <input type="text" placeholder="Name"><br>
            <input type="text" placeholder="Vorname"><br><br>
            <input type="text" placeholder="Straße Hnr"><br>
            <input type="text" placeholder="PLZ"><br>
            <input type="text" placeholder="Ort"><br>
            <input type="password" placeholder="Passwort"><br>
            <input type="password" placeholder="Passwort wiederholen">
            
            <section>
                    <input type="radio" id="agb" name="AGB" value="AGB">
                    <label for="agb">AGB bestätigen</label> <br><br>
                    <button type="button">Kostenpflichtig Registrieren</button>
            </section>
        </main>

        <?php include "footer.php" ?>

    </body>
</html>