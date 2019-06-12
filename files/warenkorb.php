<?php 
    session_start();
    // Zeit bis zum »timeout« in Sekunden
    $session_timeout = 300; // timeout nach 5min
    if (!isset($_SESSION['last_visit'])) {
    $_SESSION['last_visit'] = time();
    // Aktion der Session wird ausgeführt
    }
    if((time() - $_SESSION['last_visit']) > $session_timeout) {
    session_unset();
    session_destroy();
    // Aktion der Session wird erneut ausgeführt
    }
    $_SESSION['last_visit'] = time();

    //pay button default auf group_hidden setzten
    if(!isset($_SESSION['payButton']))
    {
        $_SESSION['payButton'] = "group_hidden";
    }
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
    <?php include "connect.php"?>

</head>
<body>

    <?php include "header.php"?>
    
    <main>
        <h1>Hi ich bin Basti, ich betreue deinen Warenkorb</h1>
            <?php 
            $gesamtpreis = 0;

            //Artikel auslesen
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
                                echo("<p class='menge'>Menge: ".$_SESSION[$col['ArtikelNr']]."");
                                echo("</p>");
                                //Preis * Anzahl
                                $col['Listenpreis'] = $col['Listenpreis'] * $_SESSION[$col['ArtikelNr']];
                                echo("<p>Preis: ".$col['Listenpreis']." €");

                                echo("<form action='warenkorb.php' method='post' class='inWarenkorb'>
                                    <button name=".$col['ArtikelNr']." type='submit'>Delete</button>");
                                //Artikel aus dem Warenkorb entfernen
                                if(isset($_POST[$col["ArtikelNr"]]))
                                {   
                                    $key = array_search($a, $arr);
                                    unset($arr[$key]);
                                    $_SESSION['cart_items'] = $arr;
                                    
                                    echo "<meta http-equiv='refresh' content='0'>";
                                }
                                echo("</form>");

                            echo("</td>");
                            echo("</tr>");
                        echo("</table>
                        </section>");

                        $gesamtpreis += $col['Listenpreis'];
                        unset($_POST[$col["ArtikelNr"]]);
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
                        <p>GesamtPreis:</p>
                    </td>
                    <td class="Preis">
                        <p>
                            <?php echo($gesamtpreis); ?>&nbsp;€
                        </p>
                    </td>
                </tr>
                <tr><td>
                    <p>&nbsp;</p>
                </td></tr>
                <tr class="printhidden">
                    <td>
                        <a href="index.php">&lt;&lt;&nbsp;Zurück zu unserem Angebot</a>
                    </td>
                    <td class="pay <?php echo $_SESSION['payButton']?>">
                        <a href="completeOrder.php"><button 
                        type="button"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAY&nbsp;AND&nbsp;ORDER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></button></a>
                    </td>
                </tr>
            </table>
        </section>
    </main>

    <?php include "footer.php" ?>
    
</body>
</html>