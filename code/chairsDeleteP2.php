<?php
session_start();
include "../connection.php";

if(isset($_GET["userid"]) && isset($_GET["id2"])){
    $userid = $_GET["userid"];
    $id2 = $_GET["id2"];

    $getiduser = $mysql->prepare("SELECT idUser FROM chairs WHERE idUser = ? AND id = ?;");
    $getiduser->bind_param("ii", $userid, $id2);
    $getiduser->execute();
    $getiduser->bind_result($finalid);
    $getiduser->fetch();
}

header('Location: chairsDeleteP3.php?finalid='.$finalid.'&id2='.$id2.'');

?>