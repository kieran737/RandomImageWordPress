<!DOCTYPE html>
<html>
	<head>
		<title>Guess the Logo</title>
	</head>
	</body>
		<div id="Wrapper" align="center">
		<header><h1>Guess the Logo</h1></header>
		<div id="logoSelect">
			<?php
				/*
				Plugin Name: Guessing Game
				*/
				//Retailers array stores inner array containing name and image path for each retailer.
				$Retailers = array(
					array("Name" => "Amazon", "ImagePath" => "images/amazon.png"),
					array("Name" => "Ebay", "ImagePath" => "images/ebay.png"),
					array("Name" => "Tesco", "ImagePath" => "images/tesco.png")
				);
				
				//Generate random number - store value in $Retailer variable
				$Retailer = rand(0, count($Retailers) -1); //Take 1 off count for indexing

				echo '<img src="'. $Retailers[$Retailer]["ImagePath"] .'" width="600" height="200" />';
			?>
		</div>
		<!-- Button to show logo name -->
		<input type="button" id="showLogoNameBtn" name="answer" value="Show logo name" />
		<!-- Logo name -->
		<p id="imageText"></p>		
		<!-- Scripts at bottom of body so that they are loaded after html elements -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<script>
			var retailer = "<?php echo $Retailers[$Retailer]["Name"]; ?>"; //retailer variable, get from value from PHP

			$("#showLogoNameBtn").click(function() {
				$("#imageText").text(retailer);
			});
		</script>
		</div> <!-- Wrapper -->
	</body>
</html>