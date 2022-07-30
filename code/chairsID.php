<?php

include "../connection.php";

$result = $mysql->query("SELECT id FROM chairs");

$rows = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($rows);
?>