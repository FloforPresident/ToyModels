<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Impressum</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/impressum-style.css">
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <meta charset="utf-8"> 

        <script src="js/login.js"></script>
        <?php include "connect.php"?>
    </head>
    <body>

        <?php include "header.php" ?>

        <main>                
                <div class='impressum'>
                    <h1>Hallo, ich hoffe Ihnen gefällt unser Impressum, COOL</h1>
                    <h1>Impressum</h1>
                    <p>Angaben gemäß § 5 TMG</p>
                    <p>Max Muster 
                    <br> Musterweg<br> 
                    12345 Musterstadt <br> 
                    </p><p> <strong>Vertreten durch: </strong><br>
                    Bastian Muster<br>
                    Stefan Musterlich<br>
                    Florian Musterer<br>
                    </p><p><strong>Kontakt:</strong> <br>
                    Telefon: 01234-789456<br>
                    Fax: 1234-56789<br>
                    E-Mail: <a href='mailto:max@muster.de'>max@muster.de</a></p><p><strong>Umsatzsteuer-ID: </strong> <br>
                    Umsatzsteuer-Identifikationsnummer gemäß §27a Umsatzsteuergesetz: Musterustid.<br><br>
                    <strong>Wirtschafts-ID: </strong><br>
                    Musterwirtschaftsid<br>
                    </p><p><strong>Aufsichtsbehörde:</strong><br>
                    Musteraufsicht Musterstadt<br></p><br> 
                 </div>
        </main>

        <?php include "footer.php" ?>
        
    </body>
</html>