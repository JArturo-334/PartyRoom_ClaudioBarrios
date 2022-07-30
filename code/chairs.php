<?php

include "../connection.php";
$result = $mysql->query(
    "SELECT c.id, IFNULL(s.full_name, ' ') AS name
    FROM chairs c LEFT JOIN users s ON s.id = c.idUser"
);

$rows = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($rows);

?>