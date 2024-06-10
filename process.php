<?php 
$paragraph = $_GET["text"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
			crossorigin="anonymous" />
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
			integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
			crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="./css/style.css">
    <title>PROCESS</title>
</head>
<body>
	<div class="row justify-content-center">
		<div class="col-5 deb text-center">
	
			<h2 class="text-warning display-3 fw-bold text-center">DATA RECIVED</h2>
			<h3>
				<?php 
					echo "The sent paragraph length is " . strlen($paragraph) . " characters";
				?>
			</h3>

			<h3>
				<?php 
					echo str_replace("ciao", "***", $paragraph);
				?>
			</h3>

			<h3>
				<?php 
					echo "The censored paragraph length is " . strlen(str_replace("ciao", "***", $paragraph)) . " characters";
				?>
			</h3>
		</div>
	</div>
</body>
</html>