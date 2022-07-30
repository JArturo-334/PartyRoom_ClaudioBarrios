<?php
session_start();
include "../connection.php";

$id2 = $_POST["idchair"];

    $statementdel = $mysql->prepare("SELECT id FROM users WHERE id = ?;");
    $statementdel->bind_param("i", $_SESSION["id"]);
    $statementdel->execute();
    $statementdel->bind_result($userid);
    $statementdel->fetch();

header('Location: chairsDeleteP2.php?userid='.$userid.'&id2='.$id2.'');

?>