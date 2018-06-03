<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<table border="1px">
	<tr>
		<th>Id</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Username</th>
		<th>Update</th>
	</tr>
	<!-- <?php
	// foreach($user_data as $user){
	// 	echo '<tr>';
	// 	echo '<td>'.$user->id.'</td>';
	// 	echo '<td>'.$user->first_name.'</td>';
	// 	echo '<td>'.$user->last_name.'</td>';
	// 	echo '<td>'.$user->user_name.'</td>';
	// 	echo '</tr>';
	// }
	?> -->
	@foreach($user_data as $user)
		<tr>
		<td>{{$user->id}}</td>
		<td>{{$user->first_name}}</td>
		<td>{{$user->last_name}}</td>
		<td>{{$user->user_name}}</td>
		<td><a href="{{ url('/user_update/'.$user->id) }}"><button>Update</button></a></td>
		</tr>
	@endforeach
	
	</table>
</body>
</html>