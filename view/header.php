<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1">
	<title>ID90 Travel</title>

	<!-- Bootstrap core -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- Stylesheet propia -->
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg bg-blue-id90">
			<a class="navbar-brand" href="/index.php"> <img src="/img/id90logo.png" alt=""> </a>
			
			<!-- Mostrar o no botones en la navbar, según haya usuario logueado o no -->
			<?php
                if (isset($_SESSION['username'])) {
                    echo '
						<ul class="nav navbar-nav mr-auto">
							<li class="nav-item">
								<a href="/view/searchform.php" class="btn btn-id90 nav-link">Hotel Search!</a>
							</li>
						</ul>

						<span class="navbar-text disabled" style="padding-right: 10px; color: white;">'.$_SESSION['username'].'</span>

						<form class="form-inline" action="/app/logout.php" method="post">
							<button class="btn btn-id90" type="submit" >Logout</button>
						</form>
					';
                } else {
                    echo '
						<div><a href="/view/loginform.php" class="btn btn-id90">Login</a></div>
					';
                }
            ?>
		</nav>
	</header>