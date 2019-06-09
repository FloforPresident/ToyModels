<?php
    if(!isset($_SESSION['loggingOUT']))
    {
        $_SESSION['loggingOUT'] = "group_hidden";
    }
    
?>
<head>
    <?php //include "connect.php"; ?>
    <script src="js/main.js"></script>
    <script src="js/login.js"></script>
    <?php include "warenkorbhover.php"; ?>

</head>

<header>
            <section>
                <h1>
                    <a href="index.php">Toy Models GmbH</a>
                </h1>
            </section>  
            <section id="suchfeld">
                    <form action="suche.php" method="post">
                    <input type="search" name="suchbegriff" placeholder="Suche">
                    <button type="submit">Suchen</button>
                </form>
            </section>  

            <!-- ab hier anmelden -->
            <section id="signIn">     
                <form id="loginForm" class="<?php echo $_SESSION['loggedIN']?>" action="" method="post" name="login">
                    <button>Login</button> 
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
                        $searchID = "SELECT * FROM kunden"; 
                        
                        foreach($pdo->query($searchID) as $col)
                        {
                            if($col["KundenNr"] == $kundennummer)
                            {
                                $kundenname = $col["Vorname"];
                                $_SESSION['login_user'] = $kundenname;

                                echo "Wilkommen ";
                                echo $col["Vorname"];
                                $found = True;
                                $_SESSION['loggedIN'] = "group_hidden";
                                $_SESSION['loggingOUT'] = "group_shown";

                                $_SESSION['payButton'] = "group_shown";

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
            <!-- anmelden ende -->

            <!-- ab hier abmelden -->
            <section id="logout">
                <form id="logoutForm" class="<?php echo $_SESSION['loggingOUT']?>" action="" method="post" name="login">
                    <button name="abmelden" type='submit'>Logout</button>   
                    <?php
                    if(isset($_POST['abmelden']))
                    {
                        $_SESSION['loggedIN'] = "group_shown";
                        session_unset();
                        session_destroy();
                        $_SESSION['payButton'] = "group_hidden";

                        header("Location:index.php");     
                    }                      
                    ?>
                    <b>Welcome <?php echo $_SESSION['login_user'] ?></b>
                </form>
            </section>
            <!-- abmelden ende -->

            <section id="warenkorb"   
            onmouseover='getHoverTemplate(this.id)' 
            onmouseout='killHoverTemplate(this.id)'>
                <a href="warenkorb.php">
                    <img width="40px" src="images/warenkorb_white.png"/>
                </a>
            </section>

        </header> 