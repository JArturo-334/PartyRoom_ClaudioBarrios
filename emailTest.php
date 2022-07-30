<?php

    include "code/class.email.php";
    $email = $_POST["suscribe"];
    $obj = new Email();

    $message = "Puede utilizar la mensajería de publicación/suscripción para publicar un mensaje
     en muchos suscriptores. Una aplicación productora publica un mensaje en un área o tema determinado.
      El tema de un mensaje específico (publicación) es una propiedad del mensaje. Las aplicaciones de
       consumidor que se han suscrito al tema reciben cada una una copia del mensaje. Un espacio de
        temas es una jerarquía de temas de publicación/suscripción. Estos temas tienen puntos de
         publicación definidos automáticamente en cada motor de mensajería de su bus de integración
          de servicios asociado.

    Un destino de espacio de tema de integración de servicios no está localizado
     en un miembro de bus concreto. La integración de servicios mantiene una lista
      de suscripciones en el espacio de temas y coincide con cada publicación en dicha
       lista. Cuando una nueva publicación coincide con una o varias suscripciones
        en el espacio de temas, la integración de servicios entrega una copia
         de la publicación a cada suscriptor. Si es necesario, la integración
          de servicios puede poner en cola el mensaje de publicación hasta que el
           suscriptor esté preparado para recibirlo. Si la nueva publicación no
            coincide con ninguna suscripción, la integración de servicios descarta la publicación.";

    $obj->sendEmail($email, "FOR YOU", "HI! THANK YOU FOR SUSCRIBING!", $message);

    #header('Location: index.php');

?>