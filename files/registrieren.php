<!DOCTYPE html>
<html>
    <head>
        <title>Hier Registrieren</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/register-style.css">
        <script type="text/javascript" src="js/jquery-3.4.1.min.js" ></script>
        <script src="js/main.js"></script>
        <meta charset="utf-8"> 
    </head>
    <body>

        <?php include "header.php" ?>
        
        <main>
            <a href="index.php">&lt;&lt;&nbsp;Zurück zu unserem Angebot</a>
            <h1>Hi ich bin Stefan, du kannst dich hier Registrieren</h1>
            <form name="registrieren">
            <table>
                <tr>
                    <td>Name*</td>
                    <td><input type="text" name="name" placeholder="Name"><br></td>
                </tr>
                <tr>
                    <td>Vorname*</td>
                    <td><input type="text" name="vorname" placeholder="Vorname"><br><td>
                </tr>
                <tr>
                    <td>E-Mail*</td>
                    <td><input type="text" name="email" placeholder="E-Mail"><br></td>
                </tr>
                <tr>
                    <td>E-Mail wiederholen*</td>
                    <td><input type="text" name="emailwiederholen" placeholder="E-Mail wiederholen"><br></td>
                </tr>
                
            </table>
            <input type="radio" id="agb" value="AGB">
            <label for="agb">AGB bestätigen*</label><br><br>
            <button type="button" onclick="checkformular()">Kostenpflichtig Registrieren</button><br><br>
            <p>* Pflichtfelder</p>
            </form>
        </main>

        <?php include "footer.php" ?>

    </body>
</html>