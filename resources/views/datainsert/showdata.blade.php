<!-- @php
print_r($data);
@endphp -->


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<table>
	<tr>
		<thead>
			id
		</thead>
		<thead>
			Name
		</thead>
		<thead>
			Email
		</thead>
		<thead>
			Address
		</thead>
		<thead>
			Roll No
		</thead>
	</tr>
	@foreach($data as $key=>$value)
	<tr>
		<td>{{$value->id}}</td>
		<td>{{$value->name}}</td>
		<td>{{$value->email}}</td>
		<td>{{$value->address}}</td>
		<td>{{$value->rollno}}</td>
	</tr>
	@endforeach
</table>

</body>
</html>