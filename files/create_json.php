<?php
    include "connect.php";

    $artikel = "SELECT * FROM artikel";
    $artikelArray = array();
    $i = 0;

    foreach($pdo->query($artikel) as $col){

        $artikelArray[$i] = $col['ArtikelName'];
        $i++;
    }

    echo '[';

    for ($i = 0; $i < count($artikelArray); $i++){
        
        echo json_encode($artikelArray[$i]);
        if($i != count($artikelArray) - 1){
            echo ',';
        }
    }

    echo ']';
?>

