<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method='get' action="{{url('user_update_post/'.$user->id)}}">
<label for="fname"><b>First Name</b></label>
  <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
    <input type="text" placeholder="Enter First Name" name="fname" required value={{$user->first_name}} >
    <br>
    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required value={{$user->last_name}}>
    <br>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required value={{$user->user_name}}>
    <br>
    <label for="psw"><b>Password</b></label>
    
    <input type="password" placeholder="Enter Password" name="psw" required value={{$user->password}}>
    <br>
    <label for="address"><b>address</b></label>
    
    <input type="text" placeholder="Enter address" name="address" required  >
    <br>
    <label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter age" name="age" required >
    <button type='submit'>Update</button>
    </form>
</body>
</html>