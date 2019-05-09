<?php 
	include "header.php";

	// Validación de usuario logueado
	
	if(!isset($_SESSION['username'])){header("Location: ../view/loginform.php");}
 ?>

	<main>
		<div class="container col-md-6">

			<h1 align="center">Hotel Search</h1>

			<!-- Formulario de búsqueda de hoteles -->

			<form action="showsearch.php" method="GET">
				<div class="form-group">
					<label for="destination">Destination</label>
					<input type="text" name="destination" id="destination" class="form-control" required></input>
				</div>
				<div class="form-group">
					<label for="checkin">Check In</label>
					<input type="date" id="checkin" name="checkin" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="checkout">Check Out</label>
					<input type="date" id="checkout" name="checkout" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="guests">Guests</label>
					<input type="text" id="guests" name="guests" class="form-control" required>
				</div>
				<div class="container col-md-4" align="center">
					<button type="submit" id="search-submit" class="btn  btn-lg btn-id90"> Search</button>
				</div>
			</form>

			<!-- Errores en la búsqueda -->

			<?php 

				if(isset($_GET['error'])){
					if ($_GET['error']==500) {
						echo'<p class="error">Please verify data.</p>';
					}elseif ($_GET['error']==200) {
						echo'<p class="error">Could not find any hotels matching that request. Please try your search again.</p>';
					}
				}

			?>

		</div>
	</main>
<?php 
	include "footer.php"
 ?>