<!DOCTYPE html>
<html>
    <head>
        <title>Index Site</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/index-style.css">
        <meta charset="utf-8"> 

        <script type="text/javascript">
        function show_description(Bescreibung)
            {
                obj = document.getElementById('Beschreibung1');
                if(obj.style.display=='none'){
                    obj.style.display='block';
                } else{
                    obj.style.display='none';
                }
            }
        </script>
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
                        <li><h2><a onclick="show_description(Beschreibung1)">Boing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100€</a></h2></li>
                        <li>ArtNummer: 1</li>
                        <li id="Beschreibung1">Beschreibung:<br> Hier steht eine Beschreibung Bla Bla Bla</li>
                        <li class="textcentered"><label>Anzahl:</label>&nbsp;&nbsp;&nbsp;<input type="number" placeholder="1"></input></li>
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

        <?php include "footer.php" ?>

    </body>
</html>