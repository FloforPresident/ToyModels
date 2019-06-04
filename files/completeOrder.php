<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Completed</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/warenkorb-style.css">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <meta charset="utf-8"> 
    <?php include "connect.php"?>

</head>
<body>
    <?php include "header.php"?>

    <main>
        <?php
            if(!isset($_SESSION['login_user']))
            {
                echo("
                <script type='text/javascript' language='javascript'>  
                alert('Melde dich bitte an') 
                </script>"); 
            }
        ?>
        <h1>Vielen Dank für deine Bestellung</h1>
        <h2>Diese Artikel werden an dich verschickt:</h2>
        <?php
        $gesamtpreis=0;
        if(isset($_SESSION['cart_items']))
            {
                $arr = array_unique($_SESSION['cart_items']);
                
                foreach($arr as $a)
                {
                    $artNumber = "SELECT * FROM artikel WHERE ArtikelNr='$a'";
                    foreach($pdo->query($artNumber) as $col)
                    {
                        echo("<section class='artikel'>
                        <table class='Preisanzeige'>");
                            echo("<tr>");
                            echo("<td>");

                            //einzelnes Artikelfeld
                                echo("<h3 class='name'>");
                                echo($col['ArtikelName']);
                                echo("</h3>");
                                echo("<p class='artikelNummer'>Artikelnummer: ".$col['ArtikelNr']."</p>");
                                echo("<p class='menge'>Menge: ");
                                echo($_SESSION[$col['ArtikelNr']]); //Anzahl
                                echo("</p>");
                                $col['Einkaufspreis'] = $_SESSION[$col['ArtikelNr']] * $col['Einkaufspreis']; //Anzahl * Preis
                                echo("<p>Preis: ".$col['Einkaufspreis']." €</p>");

                            echo("</td>");
                            echo("</tr>");
                        echo("</table>
                        </section>");

                        $gesamtpreis += $col['Einkaufspreis']; 
                        unset($_SESSION['cart_items']);

                        $helpvariable1 = $_SESSION[$col['ArtikelNr']]; //Bestellte Anzahl
                        $helpvariable2 = $col['ArtikelNr']; 
                
                        //Bestandsmenge aktualisieren
                        $statement = $pdo->prepare(
                            "UPDATE artikel
                            SET Bestandsmenge = Bestandsmenge - ?
                            WHERE ArtikelNr= ?");
                        $statement->execute(array("$helpvariable1", "$helpvariable2"));
                    }
                }
            }
        else{
            echo("<h3>Keine Artikel im Warenkorb</h3>");
        }
        ?>

        <section id="GesamtPreis">
            <hr><hr>
            <table class="Preisanzeige">
                <tr>
                    <td>
                        <p>Gesamtpreis mit Rabatten:</p>
                    </td>
                    <td class="Preis">
                        <p>
                            <?php echo($gesamtpreis); ?>&nbsp;€
                        </p>
                    </td>
                </tr>
            </table>
        </section>

    </main>
</body>