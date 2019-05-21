<?php include "connect.php"; ?>
<script src="js/main.js"></script>
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
                </form>
            </section>  

            <section id="signIn">
                
                <form action="" method="post" name="login">
                    <a href="#">Login</a> 
                    <section id='eingaben'>
                        <input type='text' name='kundennummer' placeholder='Kundennummer'><br><br>
                        <input name="anmelden" type='submit' value='Login'/>    
                        <a href='registrieren.php'>Hier Registrieren</a>
                    </section>
                <?php                   

                    if(isset($_POST['anmelden']))
                    {
                        $kundennummer = $_POST['kundennummer'];
                        $found = FALSE;

                        $searchID = "SELECT KundenNr FROM kunden";  //hier auch WHERE Befehl möglich 
                        foreach($pdo->query($searchID) as $col)
                        {
                           if($col["KundenNr"] == $kundennummer)
                           {
                                echo "Wilkommen";
                                $found = True;
                           }
                        }
                        if($found == false)
                        {
                            echo "ID nicht vorhanden";
                        }
                    }
                    
                ?>
                </form>
            </section>


            <section id="warenkorb">
                <a href="warenkorb.php">Warenkorb</a>
            </section>
        </header> 