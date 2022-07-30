<?php
session_start();
include "../connection.php";

$id = $_POST["idchair"];
$user = $_SESSION["id"];

$query = "SELECT id FROM users WHERE id = ?;";
$statement = $mysql->prepare($query);
$statement->bind_param("s", $user);
$statement->execute();
$statement->bind_result($id_user);
$statement->fetch();

header('Location: ../partyRoom.php?id_user='.$id_user.'&id='.$id.'');

?>