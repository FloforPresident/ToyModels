<?php
    session_start(); 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Warenkorb</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/warenkorb-style.css">
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <meta charset="utf-8"> 

        <script src="js/login.js"></script>

    </head>
    <body>

        <?php include "header.php" ?>
        
        <main>
            <h1>Hi ich bin Basti, ich betreue deinen Warenkorb</h1>
            <section class="artikel">
                <table class="Preisanzeige">
                    <tr>
                        <td>
                            <h3 class="name">Boing</h3>
                            <p class="artikelNummer">ArtNummer: 1</p>
                            <p class="menge">Menge: 1</p>
                            <p class="entfernen"><a href="">x Entfernen</a></p>
                        </td>
                        <td class="Preis">
                            <p class="preis">100&euro;</p>
                        </td>
                    </tr>
                </table>
            </section>
            <section class="artikel">
                <table class="Preisanzeige">
                    <tr>
                        <td>
                            <h3 class="name">Titanic</h3>
                            <p class="artikelNummer">ArtNummer: 2</p>
                            <p class="menge">Menge: 1</p>
                            <p class="entfernen"><a href="">x Entfernen</a></p>
                        </td>
                        <td>
                            <p class="preis">100&euro;</p>
                        </td>
                    </tr>
                </table>
            </section>
            <section id="GesamtPreis">
                <hr><hr>
                <table class="Preisanzeige">
                    <tr>
                        <td>
                            <p>GesamtPreis:</p>
                        </td>
                        <td class="Preis">
                            <p>50000&euro;</p>
                        </td>
                    </tr>
                    <tr><td>
                        <p>&nbsp;</p>
                    </td></tr>
                    <tr class="printhidden">
                        <td>
                            <a href="index.php">&lt;&lt;&nbsp;Zurück zu unserem Angebot</a>
                        </td>
                        <td class="Preis">
                            <button type="button">Zur Kasse</button>
                        </td>
                    </tr>
                </table>
            </section>
        </main>

        <?php include "footer.php" ?>
        
    </body>
</html>