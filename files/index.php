<!DOCTYPE html>
<html>
    <head>
        <title>Index Site</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/index-style.css">

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/login.js"></script>


        <meta charset="utf-8"> 

        <?php include "connect.php"; ?>

    </head>
    <body>
                
        <?php include "header.php" ?>

        <main class="artikelAnzeige">
            <nav id="artikelAuswahl">
                <ul>
                    <li>All</li>    

                    <!-- Warengruppen aus Datenbank auslesen -->
                    <?php
                        $warGrupp = "SELECT * FROM warengruppen";  //hier auch WHERE Befehl möglich 
                        foreach($pdo->query($warGrupp) as $col)
                        {
                           echo("<li>".$col["GruppenName"]."</li>");
                        }
                    ?>
                </ul>
            </nav>

            <?php
                $artikel = "SELECT * FROM artikel";
            ?>

            <section id="artikelAnzeige">
                <?php
                    foreach($pdo->query($artikel) as $col)
                    {
                    echo("<section class='artikel'>");
                        echo("<ul>");
                        echo("<li><h3 id='artikel1'><br/>".$col["ArtikelName"]."<h3></li>");
                        echo("<li>Productnumber: ".$col["ArtikelNr"]."</li>");
                        echo("<li>Price: ".$col["Listenpreis"]." €</li>");
                        echo("<li class='beschreibung hidden'>".$col["Beschreibung"]."</li>");
                        echo("</ul>");
                        
                        echo("<section class='inWarenkorb'>
                            <label>Anzahl:</label>&nbsp;&nbsp;&nbsp;
                            <input type='number' min='1' placeholder='1' />&nbsp;&nbsp;
                            <button type='button'>In den Warenkorb</button>
                        </section>");
                    echo("</section>");
                    }
                ?>
            </section>


                <!-- <section class="artikel">
                    <img src="images/boing.png">
                    <ul>
                        <li><h2>test</h2></li>
                        <li>ArtNummer: 1</li>
                        <li>Beschreibung: Cool</li>
                        <li>100€</li>
                    </ul>
                    <button type="button">In den Warenkorb</button>
                </section> -->
                
            </section> 
        </main>
        <?php include "footer.php" ?>
    </body>
</html>