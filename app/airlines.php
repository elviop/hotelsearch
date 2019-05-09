<?php 
	include 'request.php';

	// Se hace la peticion GET a $url y se almacena el json de retorno convertido en array en $airlines

	$url = 'https://beta.id90travel.com/airlines';

	$requestinfo = requestGET($url);

	$airlines = json_decode($requestinfo['result'],true);
	
 ?>