<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<table>
	<tr>
		<th>Id</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Username</th>
	</tr>
	<?php
	foreach($user_data as $user){
		echo '<tr>';
		echo '<td>'.$user->id.'</td>';
		echo '<td>'.$user->first_name.'</td>';
		echo '<td>'.$user->last_name.'</td>';
		echo '<td>'.$user->user_name.'</td>';
		echo '</tr>';
	}
	?>
	</table>
</body>
</html>