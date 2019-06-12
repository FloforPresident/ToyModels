<style>
/* popup text */
.cartHoverText {
  visibility: visible;
  width: auto;
  background-color: black;
  color: #fff;
  text-align: left;
  padding: 0rem 2rem;
  padding-bottom: 2rem;
  border-radius: 6px;
  display: block;
 
  /* Position von Popup*/
  position: absolute;
  top: 5rem;
  right: 2rem;
  z-index: 1;
}
@media (max-width: 1080px){
    .cartHoverText {
        top:8rem;
    }
}
@media (max-width: 700px){
    .cartHoverText {
        top: 18rem;
    }
}
</style>

<template id="carthover">
<?php
    //add to cart hover content
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
</template>

<!-- add to cart hover show -->
<script>
    function getHoverTemplate(element) 
    {
        let temp = document.getElementById('carthover');
        let content = temp.content.cloneNode(true);
        
        document.getElementById(element).appendChild(content);             
        
        console.log(content)
        console.log("aufruf findet statt");
    }
    function killHoverTemplate(element) 
    {
        var list = document.getElementById(element);  
        list.removeChild(list.lastChild);
    }
</script>