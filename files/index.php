<?php
    //session_start();
    // if(!isset($items))
    // {
    //     echo "check";
    //     $items = [];
    // }
    $items = [];

    // if(!isset($_SESSION['cart_items']))
    // {
    //     $_SESSION['cart_items'] = $items;
    // }
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

        <main class="artikelAnzeige">
            <nav id="artikelAuswahl">
                <img onclick="menu_clicked(this)" src="images/menu_button.png"/>
                <ul>
                    <li onclick=showGroup(1000)>All</li>    
                    <!-- Warengruppen aus Datenbank auslesen -->
                    <?php
                        $warGrupp = "SELECT * FROM warengruppen";  //hier auch WHERE Befehl möglich 
                        foreach($pdo->query($warGrupp) as $col)
                        {
                           echo("<li onclick='showGroup(".$col["GruppenNr"].")' class='".$col["GruppenNr"]."'>".$col["GruppenName"]."</li>");
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
                    echo("<section class='artikel hidden ".$col["GruppenNr"]."' onclick='showDescription(this)'>");
                        echo("<ul>");
                        echo("<li><h3 id='artikel1'><br/>".$col["ArtikelName"]."<h3></li>");
                        echo("<li>Productnumber: ".$col["ArtikelNr"]."</li>");
                        echo("<li>Price: ".$col["Listenpreis"]." €</li>");
                        echo("<li class='beschreibung'>".$col["Beschreibung"]."</li>");
                        echo("</ul>");
                        
                        echo("<form action='' method='post' class='inWarenkorb'>
                            <label>Anzahl:</label>&nbsp;&nbsp;&nbsp;
                            <input type='number' min='1' placeholder='1' />&nbsp;&nbsp;
                            <button name='addcart' type='submit'>Add to cart</button>");

                            if(isset($_POST['addcart']))
                            {
                                $items[] = $col['ArtikelNr'];
                                $_SESSION['cart_items'] = $items;

                                //header("Location:warenkorb.php"); 
                                unset($_POST['addcart']);
                            }

                        echo("</form>");
                    echo("</section>");
                            
                    }
                    
                ?>
            </section>
        </main>
        <?php include "footer.php" ?>
    </body>
</html>