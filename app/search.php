<?php
    include "request.php";

    // Validación de usuario logueado

    if (!isset($_SESSION['username'])) {
        header("Location: ../view/loginform.php");
    }

    // -->

    $destination = $_GET['destination'];
    $checkin = $_GET['checkin'];
    $checkout = $_GET['checkout'];
    $guests = $_GET['guests'];

    // Se hace la peticion POST a $url y se almacena el resultado en $requestinfo, que es un array con una key 'result' con el resultado de la peticion y una 'status' con el código de estado HTTP.

    $url = 'https://beta.id90travel.com/api/v1/hotels.json?destination='.$destination.'&checkin='.$checkin.'&checkout='.$checkout.'&guests[]='.$guests;

    $requestinfo = requestGET($url);

    // Si la petición falla, devuelve al formulario con el codigo de error.

    if ($requestinfo['status']=='500') {
        header("Location: ../view/searchform.php?error=500");
    } else {
        $requestArray = json_decode($requestinfo['result'], true);
        $hotels = [];

        if ($requestArray==null) {
            header("Location: ../view/searchform.php?error=200");
        } else {

            // Se recorre el arreglo de hoteles y se almacenan en $hotels solo los valores de 'name', 'description', 'star_rating', 'review_rating'.

            foreach ($requestArray['hotels'] as $key => $value) {
                $hotelinfo = [];

                array_push($hotelinfo, $value['name'], $value['location']['description'], $value['star_rating'], $value['review_rating']) ;

                array_push($hotels, $hotelinfo);
            }
        }
    }
