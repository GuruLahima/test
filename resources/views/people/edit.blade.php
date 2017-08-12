<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{ url('/coveci/'.$person->id)}}" method='post'>
	{{csrf_field()}}
	{{ method_field('PUT') }}
	<input type="text" name="name" value='{{$person->name}}'>
		<button type='submit'>Edit</button>
</form>
</body>
</html>