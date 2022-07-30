<?php
session_start();
include "../connection.php";

if(isset($_GET["finalid"]) && isset($_GET["id2"])){
    $finalid = $_GET["finalid"];
    $id2 = $_GET["id2"];

    if($finalid != null){
        $query2 = "UPDATE chairs SET idUser = NULL WHERE id = ? AND idUser = ?";
        $statementu2 = $mysql->prepare($query2);
        $statementu2->bind_param("ii",$id2,$finalid);
        $statementu2->execute();
    }
}

header('Location: ../partyRoom.php?');

?>