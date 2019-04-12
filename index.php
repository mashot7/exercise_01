<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Quadratic Equation Roots</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

	<div class="container mt-5 bg-light p-4">
		<form method="post" action="action.php" onsubmit="return submitData(this)">
		<p>Example: ax<sup>2</sup> + bx + c</p>
			<div class="form-row align-items-center">
				<div class="col-auto">
					<div class="col-auto">
						<label class="sr-only" for="inlineFormInputGroup">Username</label>
						<div class="input-group mb-3">
							<input type="number" name="quadrad[0]" class="form-control" id="inlineFormInputGroup" placeholder="insert a">
						</div>
					</div>
					<div class="col-auto">
						<label class="sr-only" for="inlineFormInputGroup">Username</label>
						<div class="input-group mb-3">
							<input type="number" name="quadrad[1]" class="form-control" id="inlineFormInputGroup" placeholder="insert b">
						</div>
					</div>
					<div class="col-auto">
					<label class="sr-only" for="inlineFormInputGroup">Username</label>
						<div class="input-group mb-3">
							<input type="number" name="quadrad[2]" class="form-control" id="inlineFormInputGroup" placeholder="insert c">
						</div>
					</div>
					<div class="col-auto">
						<button type="submit" class="btn btn-primary mb-2">Submit</button>
					</div>
				</div>
			</div>
		</form>
		<div id="output"</div>
	</div>

	<script src="main.js"></script>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>