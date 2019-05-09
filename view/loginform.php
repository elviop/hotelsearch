<?php 
include 'header.php';
include '../app/airlines.php';
?>

<main>
	<div class="container col-md-6">
		<h1 align="center">Login</h1>

		<!-- Formulario de Login -->

		<form action="/app/login.php" method="POST">

			<div class="form-group">
				<label for="airline">Airline</label>
				<select name="airline" id="airline" class="form-control" required>
					<option value="">Choose Airline ...</option>

					<!-- Alimentando el dropdown con las aerolineas -->

						<?php 
							foreach ($airlines as $airline){
								echo '<option value=" '.$airline['display_name'].' ">'.$airline['display_name'].'</option>';	
							}
						?>

				</select>
			</div>

			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" id="username" name="username" class="form-control" required>
			</div> 

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" id="password" name="password" class="form-control" required>
			</div>

			<div class="container col-md-4" align="center">
				<button type="submit" id="login-submit" class="btn  btn-lg btn-id90"> Login</button>
			</div>

		</form>
		
		<!-- Error de autenticación -->

		<?php 
			if (isset($_GET['error'])) {
				echo'<p class="error">Invalid credentials</p>';
			}
		?>
	</div>
</main>
<?php include "footer.php" ?>