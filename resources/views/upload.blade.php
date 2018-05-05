<!DOCTYPE html>
<html>
<head>
	<title>Nothing</title>
</head>
<body>
	<form action="/upload" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="file" name="img">
		<input type="submit">
	</form>
</body>
</html>