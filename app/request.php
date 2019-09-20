<?php

    // Recibe un String con la url a la que hacer la petición GET y devuelve un array con dos elementos: el resultado de la petición y el código de estado HTTP.

     function requestGET(String $url)
     {
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

         $result = curl_exec($ch);
         $status= curl_getinfo($ch, CURLINFO_HTTP_CODE);
         $requestInfo = ["result"=>$result,"status"=>$status];

         return $requestInfo;
     }

    // Recibe un String con la url a la que hacer la petición POST y un String con los parámetros, y devuelve un array con dos elementos: el resultado de la petición y el código de estado HTTP.
    
     function requestPOST(String $url, String $params)
     {
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_POST, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

         $result = curl_exec($ch);
         $status= curl_getinfo($ch, CURLINFO_HTTP_CODE);
         $requestInfo = ["result"=>$result,"status"=>$status];

         return $requestInfo;
     }
