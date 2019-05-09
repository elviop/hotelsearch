<?php 
require "header.php";
include "../app/search.php";

?>

<main>
	<div class="container" align="center">
		<h1 >Hotels</h1>
				
		<!-- Resultados de la búsqueda de hoteles -->

		<?php 

			foreach ($hotels as $hotel) {

				echo '

					<div class="card boxshadow"> 
						<div class="card-body">
							<div class="row">

								<div class="col-md-8">
									<h1 class="" align="left">'.$hotel[0].'</h5>
									<p class="card-text pink-id90" align="left">'.$hotel[1].'</p>
								</div>

								<div class="col-md-4">
									<h5 class="yellow-id90">'.$hotel[2].'</h5>
									<p>Star Rating</p>

									<h5 class="green-id90">'.$hotel[3].'</h5>
									<p>Review Rating</p>
								</div>

							</div>
						</div>
					</div><br>

				';
			}
		?>				
	</div>
</main>

<?php 
require "footer.php"
?>