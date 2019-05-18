<!DOCTYPE html>
<html>
    <head>
        <title>Suchergebnis</title>
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

            <section id="artikelAnzeige">
            <?php 
                $ergebniszaehler = "0";
                $suchbegriff = trim(htmlentities(stripslashes($_POST["suchbegriff"]))); 
                echo "<h2>Ergebnisse für &bdquo;" . $suchbegriff . "&ldquo;</h2>";
                echo "<br><br>";

                $artikelsuche = "SELECT * FROM artikel 
                WHERE ArtikelName LIKE :ArtikelName 
                OR ArtikelNr Like :ArtikelNr
                OR Massstab LIKE :Massstab
                OR Lieferant LIKE :Lieferant
                OR Beschreibung Like :Beschreibung
                OR Listenpreis Like :Listenpreis";
   
                $statement = $pdo->prepare("$artikelsuche");
                $statement->execute(array('ArtikelName' => "%$suchbegriff%", 
                                            'ArtikelNr' => "%$suchbegriff%", 
                                            'Massstab' => "%$suchbegriff%", 
                                            'Lieferant' => "%$suchbegriff%", 
                                            'Beschreibung' => "%$suchbegriff%", 
                                            'Listenpreis' => "%$suchbegriff%"));
                
                while($row = $statement->fetch()) {
                    echo("<section class='artikel'>");
                        echo("<ul>");
                        echo("<li><h3 id='artikel1'><br/>".$row["ArtikelName"]."<h3></li>");
                        echo("<li>Productnumber: ".$row["ArtikelNr"]."</li>");
                        echo("<li>Price: ".$row["Listenpreis"]." €</li>");
                        echo("<li class='beschreibung hidden'>".$row["Beschreibung"]."</li>");
                        echo("</ul>");
                        
                        echo("<section class='inWarenkorb'>
                            <label>Anzahl:</label>&nbsp;&nbsp;&nbsp;
                            <input type='number' min='1' placeholder='1' />&nbsp;&nbsp;
                            <button type='button'>In den Warenkorb</button>
                        </section>");
                    echo("</section>"); 
                    $ergebniszaehler++;
                 }
                 if($ergebniszaehler=="0"){
                     echo("<h3>keine Treffer für &bdquo;" . $suchbegriff . "&ldquo;</h3>");
                 }
                ?>
            </section>
        <?php include "footer.php" ?>
    </body>
</html>