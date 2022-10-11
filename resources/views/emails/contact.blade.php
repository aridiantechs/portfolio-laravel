<!DOCTYPE html>
<html>
<head>
<h2>Hey, It's me {{ $data['name'] }}</h2> 
</head>
<body>
<br>
<strong>User details: </strong><br>
<strong>Name: </strong>{{ $data['name'] }} <br>

<strong>Email: </strong>{{ $data['email'] }} <br>

<strong>Subject: </strong>{{ $data['subject'] }} <br>

<strong>Message: </strong>{{ $data['message'] }} <br><br>

<b> Thank you! </b>

</body>
</html>