<!-- @php
print_r($data)
@endphp
 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<table class="table table-bordered">
			<thead>
				<tr class="bg-dark">
					<th class="text-center text-white" colspan="8">
						View Data
					</th>
				</tr>
			</thead>
			<tbody>
				<tr class="table-primary">
					<th>id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Phone No</th>
					<th>Employee Id</th>
					
				</tr>
				@foreach($data as $key=>$value)
				<tr>
					<td>{{$value->id}}</td>
					<td>{{$value->name}}</td>
					<td>{{$value->email}}</td>
					<td>{{$value->address}}</td>
					<td>{{$value->phone}}</td>
					<td>{{$value->emp_id}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>