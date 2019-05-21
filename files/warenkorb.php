<?php 

// class cart{ 
     
//      //Initialisiert die Klasse, muss in jeder Seite ausgeführt werden.  
//     public function initial_cart() 
//     { 
//         $cart = array(); 
//         if(!isset($_SESSION['cart'])) 
//         { 
//             $_SESSION['cart']=$cart; 
//         }  
//     } 
     
//     /** 
//      *  
//      * Fügt einen Artikel in das Array ein 
//      * @param unknown_type $Artikelnummer 
//      * @param unknown_type $Beschreibung 
//      * @param unknown_type $Verkäufer 
//      * @param unknown_type $Kosten 
//      * @param unknown_type $MwstSatz 
//      * @param unknown_type $MwSt 
//      * @param unknown_type $ZwischenSumme 
//      * @param unknown_type $Anzahl 
//      * @param unknown_type $gesammt 
//      */ 
//     public function insertArtikel($Artikelnummer, $Beschreibung, $Verkäufer, $kosten, $MwstSatz, $MwSt, $ZwischenSumme, $Anzahl, $gesammt)
//     {   
//         $Artikel = array($Artikelnummer, $Beschreibung, $Verkäufer, $kosten, $MwstSatz, $MwSt, $ZwischenSumme, $Anzahl, $gesammt); 
//         $cart = $_SESSION['cart']; 
//         array_push($cart, $Artikel); 
//         $_SESSION['cart'] = $cart;    
//     } 
     
//      // Gibt Alle Artikel des Array in einer Tabelle aus.  
//     public function getcart() 
//     { 
//         $Array = $_SESSION['cart']; 
//         echo "<table width='100%'>"; 
//         echo "<tr><th>Artikel Nummer</th><th>Beschreibung</th><th>Verkäufer</th><th>Summe</th><th>MwSt Satz</th><th>MwSt Summe</th><th>Zwischen Summe</th><th>Anzahl</th><th>Summe</th></tr>"; 
//         for($i = 0 ; $i < count($Array); $i++) 
//         { 
//             $innerArray = $Array[$i]; 
             
//             echo "<tr> 
//             <td>$innerArray[0]</td> 
//             <td>$innerArray[1]</td> 
//             <td>$innerArray[2]</td> 
//             <td>$innerArray[3]</td> 
//             <td>$innerArray[4]</td> 
//             <td>$innerArray[5]</td> 
//             <td>$innerArray[6]</td> 
//             <td>$innerArray[7]</td> 
//             <td>$innerArray[8]</td> 
//             </tr>"; 
//         }     
//         echo "</table>"; 
//     } 
     
//     // Löscht den Waren Korb  
//     public function undo_cart() 
//     { 
//         $_SESSION['cart'] = array(); 
//     } 
     
//     /** 
//      *  
//      * Gibt einen Datensatz Zurück 
//      * @param int $point 
//      */ 
//     public function get_cartValue_at_Point($n) 
//     {    
//         $Array = $_SESSION['cart'];             
//         return $Array[$n];    
//     } 
//     /** 
//      *  
//      * Entfernt ein Artikel am Point n 
//      * @param int $point 
//      */ 
//     public function delete_cartValue_at_Point($point) 
//     { 
//         $Array = $_SESSION['cart']; 
//         unset($Array[$point]); 
//     } 
     
//     // Gibt die Anzahl der Artikel zurück  
//     public function get_cart_count() 
//     { 
//         return count($_SESSION['cart']); 
//     } 
// } 

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