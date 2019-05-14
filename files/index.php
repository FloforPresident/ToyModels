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

        <main class="artikelAnzeige">
            <nav id="artikelAuswahl">
                <ul>
                    <li>Alle</li>
                    <li>Autos</li>
                    <li>Züge</li>
                    <li>Schiffe</li>
                    <li>Flugzeuge</li>
                </ul>
            </nav>

            <section id="artikelAnzeige">
                <section class="artikel">
                    <img src="images/boing.png">
                    <ul>
                        <li><h2 id="artikel1">Boing</h2></li>
                        <li>ArtNummer: 1</li>
                        <li class="beschreibung hidden">Hier steht eine Beschreibung Bla Bla Bla</li>
                    </ul>
                    <section class="inWarenkorb"><label>Anzahl:</label>&nbsp;&nbsp;&nbsp;<input type="number" placeholder="1" />&nbsp;&nbsp;<button type="button">In den Warenkorb</button></section>
                </section>
                <section class="artikel">
                    <img src="images/boing.png">
                    <ul>
                        <li><h2>Boing</h2></li>
                        <li>ArtNummer: 1</li>
                        <li>Beschreibung: Cool</li>
                        <li>100€</li>
                    </ul>
                    <button type="button">In den Warenkorb</button>
                </section>
                <section class="artikel">
                    <img src="images/boing.png">
                    <ul>
                        <li><h2>Boing</h2></li>
                        <li>ArtNummer: 1</li>
                        <li>Beschreibung: Cool</li>
                        <li>100€</li>
                    </ul>
                    <button type="button">In den Warenkorb</button>
                </section>
                <section class="artikel">
                    <img src="images/boing.png">
                    <ul>
                        <li><h2>Boing</h2></li>
                        <li>ArtNummer: 1</li>
                        <li>Beschreibung: Cool</li>
                        <li>100€</li>
                    </ul>
                    <button type="button">In den Warenkorb</button>
                </section>
                <section class="artikel">
                    <img src="images/boing.png">
                    <ul>
                        <li><h2>Boing</h2></li>
                        <li>ArtNummer: 1</li>
                        <li>Beschreibung: Cool</li>
                        <li>100€</li>
                    </ul>
                    <button type="button">In den Warenkorb</button>
                </section>
                <section class="artikel">
                    <img src="images/boing.png">
                    <ul>
                        <li><h2>Boing</h2></li>
                        <li>ArtNummer: 1</li>
                        <li>Beschreibung: Cool</li>
                        <li>100€</li>
                    </ul>
                    <button type="button">In den Warenkorb</button>
                </section>
                <section class="artikel">
                    <img src="images/boing.png">
                    <ul>
                        <li><h2>Boing</h2></li>
                        <li>ArtNummer: 1</li>
                        <li>Beschreibung: Cool</li>
                        <li>100€</li>
                    </ul>
                    <button type="button">In den Warenkorb</button>
                </section>
            </section>
        </main>

        <?php
            $sql = "SELECT * FROM warengruppen";
            foreach ($pdo->query($sql) as $row) {
            echo $row['GruppenNr']."<br />";    //echo = ausgeben
            echo $row['GruppenName']."<br />";
            echo $row['Beschreibung']."<br /><br />";
            }
        ?>

        <?php include "footer.php" ?>

    </body>
</html>