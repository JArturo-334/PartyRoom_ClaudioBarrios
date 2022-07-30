<?php

include "connection.php";

session_start();

    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $statement = $mysql->prepare("SELECT id, username, email FROM users WHERE username = ? AND password = ?");
    $statement->bind_param("ss", $user, $pass);
    $statement->execute();
    $statement->bind_result($id, $username, $email);
    $statement->fetch();


    if ($username != null){
        $_SESSION["name"] = $user;
        $_SESSION["id"] = $id;
        echo "Valid User";
    }

    else{
        session_destroy();
        echo "Invalid User";
    }

?>