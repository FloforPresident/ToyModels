<?php include "connect.php"; ?>

<header>
            <section>
                <a href="index.php">
                    <h1>Toy Models GmbH</h1>
                </a>
            </section>  
            <section id="suchfeld">
                <input type="search" placeholder="Suche">
                <button type="button">Suchen</button>
            </section>  

            <section id="signIn">
                
                <form name="login">

                    <input onclick='loggingIn(this.form)' type='button' value='Login'/>
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
                        <input type="text" id="kundennummer" placeholder="Kundennummer">
                        <input onclick='loggingIn(this.form)' type='button' value='Login'/>

                        
                        <a href="registrieren.php">Hier Registrieren</a>
                    </section>
                    
                </form>
            </section>


            <section id="warenkorb">
                <a href="warenkorb.php">Warenkorb</a>
            </section>
        </header> 