<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hello</h1>
	<form id="formcheck" enctype="multipart/form-data" action="/ch" method="POST">
		@csrf
		<input type="text" name="name">
		<input id="p_image1" name="image[]" type="file" multiple="true" class="form-control">
		<button type="submit">Submit</button>
	</form>
	<br>

</body>
</html>

