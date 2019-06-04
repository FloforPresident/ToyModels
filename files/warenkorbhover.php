<style>
/* popup text */
.cartHover .cartHoverText {
  visibility: hidden;
  width: auto;
  background-color: black;
  color: #fff;
  text-align: left;
  padding: 0rem 2rem;
  padding-bottom: 2rem;
  border-radius: 6px;
 
  /* Position von Popup*/
  position: absolute;
  top: 4rem;
  right: 2rem;
  z-index: 1;
}

.cartHover:hover .cartHoverText {
  visibility: visible;
}
</style>
<?php
 //add to cart hover
 echo("<span class='cartHoverText'>");
 if(isset($_SESSION['cart_items']))
     {
         $arr = array_unique($_SESSION['cart_items']);
         
         echo("<tr>");
         echo("<h4>Artikel im Warenkorb</h4>");
         foreach($arr as $a)
         {
             $artNumber = "SELECT * FROM artikel WHERE ArtikelNr='$a'";
             foreach($pdo->query($artNumber) as $col)
             {
                 echo("<section>
                     <table>");
                         echo("<li class='menge'>".$_SESSION[$col['ArtikelNr']]."x ".$col['ArtikelName']."</li>");
                echo("</tr>");
             }
         }
         echo("</table>
         </section>");
     }
     else{
         echo("<h3>Keine Artikel im Warenkorb</h3>");
     }
 
 
echo("</span>");
?>