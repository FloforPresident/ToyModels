<?php
    session_start();

    //hilfsvariablen für Warenkorbarray
    $item = NULL;
    $amount = NULL;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Index Site</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/index-style.css">

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script src="js/main.js"></script>

        <meta charset="utf-8"> 

        <?php include "connect.php"; ?>
    </head>
    <body>
        <?php include "header.php" ?>

        <!-- Warengruppen aus Datenbank auslesen -->
        <main class="artikelAnzeige">
            <nav id="artikelAuswahl">
                <img onclick="menu_clicked(this)" src="images/menu_button.png"/>
                <ul>
                    <li onclick=showGroup(1000)>All</li>    
                    <?php
                        $warGrupp = "SELECT * FROM warengruppen"; 
                        foreach($pdo->query($warGrupp) as $col)
                        {
                           echo("<li onclick='showGroup(".$col["GruppenNr"].")' class='".$col["GruppenNr"]."'>".$col["GruppenName"]."</li>");
                        }
                    ?>
                </ul>
            </nav>
            
            <!-- Artikel für Anzeige aus Datenbank lesen -->
            <section id="artikelAnzeige">
                <?php
                    $artikel = "SELECT * FROM artikel";
                    foreach($pdo->query($artikel) as $col)
                    {
                    //einzelnes Artikelfeld
                    echo("<section class='artikel hidden ".$col["GruppenNr"]."'>");
                        echo("<ul>");
                        echo("<li><h3 id='artikel1' onclick='showDescription(this)'><br/>".$col["ArtikelName"]."<h3></li>");
                        echo("<li>Productnumber: ".$col["ArtikelNr"]."</li>");
                        echo("<li>Price: ".$col["Listenpreis"]." €</li>");
                        echo("<li class='beschreibung'>".$col["Beschreibung"]."</li>");

                        // Hilfszeile um Datenbankzugriff zu überprüfen
                        echo("<li>Bestand: ".$col['Bestandsmenge']."</li>");

                        echo("</ul>");
                        
                        //add to cart form
                        echo("<form method='post' class='inWarenkorb'>
                            <label>Anzahl:</label>&nbsp;&nbsp;&nbsp;
                            <input name='anzahl' type='number' min='1' value='1' />&nbsp;&nbsp;
                            <button name=".$col['ArtikelNr']." type='submit'>Add to cart</button>");

                            if(isset($_POST[$col["ArtikelNr"]]))
                            {
                                if(!isset($_SESSION['cart_items']))
                                {
                                    echo $item;
                                    $item = $col['ArtikelNr'];
                                    $_SESSION['cart_items'] = array($item);

                                    $amount = $_POST['anzahl'];
                                    $_SESSION[$col["ArtikelNr"]] = $amount;
                                }
                                else
                                {
                                    $item = $col['ArtikelNr'];
                                    array_push($_SESSION['cart_items'], $item);

                                    $amount = $_POST['anzahl'];
                                    $_SESSION[$col["ArtikelNr"]] = $amount;
                                }
                            }
                        echo("</form>");

                    echo("</section>");       
                    }
                ?>
            <section id="abstand"></section>
            </section>
        </main>
        <?php include "footer.php" ?>
    </body>
</html>