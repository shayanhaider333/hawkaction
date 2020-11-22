<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hello</h1>
	<form id="formcheck" action="/ch" method="POST">
		@csrf
		<input type="text" name="a">
		<br>
		<input type="checkbox" id="vehicle1" name="v[]" value="My Bike">
		<label for="vehicle1">bike</label><br>
		<input type="checkbox" id="vehicle2" name="v[]" value="Car">
		<label for="vehicle2">car</label><br>
		<input type="checkbox" id="vehicle3" name="v[]" value="Boat">
		<label for="vehicle3">boat</label><br>

		<button type="submit">Submit</button>
	</form>
	<br>

<script src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>

