<?php
    session_start();
?>
<head>
    <?php include "connect.php"; ?>
    <script src="js/main.js"></script>
    <script src="js/login.js"></script>
</head>

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
                
                <form id="loginForm" action="" method="post" name="login">
                    <a href="#">Login</a> 
                    <section id='eingaben'>
                        <input type='text' name='kundennummer' placeholder='Kundennummer'><br><br>
                        <input name="anmelden" type='submit' value='Login'/>    
                        <a href='registrieren.php'>Hier Registrieren</a>
                    </section>

                    <?php
                    if(isset($_SESSION["login_user"]) == true)
                    {
                        echo "Willkommen ";
                        echo $_SESSION["login_user"];
                    }
                    //session_start();

                    if(isset($_POST['anmelden']))
                    {
                        $kundennummer = $_POST['kundennummer'];
                        $found = FALSE;
                        $searchID = "SELECT * FROM kunden";  //hier auch WHERE Befehl möglich
                        
                        
                        foreach($pdo->query($searchID) as $col)
                        {
                            if($col["KundenNr"] == $kundennummer)
                            {
                                //session_start();
                                $kundenname = $col["Vorname"];
                                $_SESSION['login_user'] = $kundenname;
                                //echo $_SESSION['login_user'];

                                echo "Wilkommen ";
                                echo $col["Vorname"];
                                $found = True;

                                header("Location:welcome.php"); 
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