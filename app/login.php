<?php 
	include "request.php";

	$username = $_POST['username'];
	$password = $_POST['password'];
	$airline = $_POST['airline'];	 

	// Se hace la peticion POST a $url, pasando los parámetros $param y se almacena el resultado en $requestinfo, que es un array con una key 'result' con el resultado de la peticion y una 'status' con el código de estado HTTP.

	$url = 'https://beta.id90travel.com/session.json';
	$param = 'session[username]='.$username.'&session[password]='.$password;

	$requestinfo = requestPOST($url,$param);

	// Si la peticion es exitosa se inicia la sesión y se establecen las variables de sesión. Si no, redirecciona al login con el código de error

	if($requestinfo['status']==200){

		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['airline'] = $airline;
		
		header("Location: ../view/searchform.php");
		
		} else {

		header("Location: ../view/loginform.php?error=error");	
			
	}
	
