<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action='{{url("/coveci")}}' method='post'>
	{{csrf_field()}}
	<input type="text" name="name">
	<button type='submit'>Add</button>
</form>
</body>
</html>