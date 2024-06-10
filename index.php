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
    <title>PHP Bad-Words</title>
</head>
<body>

<div class="row mx-0 justify-content-center">
    <div class="col-5 deb px-0 text-center">
        <h1 class="text-warning display-3 fw-bold text-center">FORM</h1>
        <form action="process.php" method="get">
            <textarea name="text" placeholder="Write Text" class="form-control"></textarea>
            <button type="submit" class="btn bg-warning fw-bold mt-4">SUBMIT</button>
        </form>
    </div>
</div>
    
</body>
</html>