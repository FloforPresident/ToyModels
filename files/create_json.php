<?php
    include "connect.php";

    if (isset($_GET['q']))
    {
        $searchpara ="%". $_GET['q']. "%";
    }

    $sql = "SELECT ArtikelName FROM artikel WHERE artikel.ArtikelName LIKE :artName LIMIT 5";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":artName", $searchpara);
    $stmt->execute();
    $artikel = $stmt -> fetchAll();
 
    $json = "[";
    foreach ($artikel as $row) {
        if ($json != "[") {$json .= ",";}
        $json .= '{"Name":"'. $row['ArtikelName']     . '"}'; 
    }
    $json .="]";
    echo $json;
?>

