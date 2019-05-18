<?php include "connect.php"; ?>
<script src="js/main.js"></script>
<script src="js/login.js"></script>
<header>
            <section>
                <a href="index.php">
                    <h1>Toy Models GmbH</h1>
                </a>
            </section>  
            <section id="suchfeld">
                    <form action="suche.php" method="post">
                    <input type="search" name="suchbegriff" placeholder="Suche">
                    <button type="submit">Suchen</button>
                </form
            </section>  

            <section id="signIn">
                
                <form name="login">

                    <!--loggingIn(this.form) wird erst ausgeführt wenn checkkid true liefert -->
                    <input onclick='return checkkid() && loggingIn(this.form)' type='button' value='Login'/> 
                    <?php 
                    $kunden = "SELECT * FROM kunden"; 
                    foreach($pdo->query($kunden) as $col)
                        {
                        //    echo("<li>".$col["KundenNr"]."</li>");
                        //    echo("<input onclick='check(this.form, ".$col['KundenNr'].")' type='button' value='Login'/>")
                        //    echo("<input onclick='check(this.form)' type='button' value='Login'/>");
                        }
                    ?>
                    <section id="eingaben">
                        <input type="text" id="kundennummer" name="kid" placeholder="Kundennummer"><br><br>
                        <input onclick='return checkkid() && loggingIn(this.form)' type='button' value='Login'/>    
                        <a href="registrieren.php">Hier Registrieren</a>
                    </section>
                    
                </form>
            </section>


            <section id="warenkorb">
                <a href="warenkorb.php">Warenkorb</a>
            </section>
        </header> 