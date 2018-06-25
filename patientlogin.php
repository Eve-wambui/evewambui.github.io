<!DOCTYPE html>
<html>
<head>
	<title>LOGIN|PRIMEHOSPITAL</title>
	<style type="text/css">
	#btn1:hover{
		color: blue;
	}
	body{
		background-image: url(pic/jk.jpg);
		background-size:cover;
	}
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>
<body>
<div class="container" style="width: 400px; margin-top: 90px;">
<div class="card">
<img src="pic/aa.jpg" class="card-img-top">
<div class="card=body">
	<form class="form-group" action="function.php" method="POST">
		<label>EMAIL:</label><br>
		<input type="email" name="mail" placeholder="Enter email" class="form-control"></input><br>
		<label>PASSWORD:</label><br>
		<input type="password" name="pass" placeholder="Enter password" class="form-control"></input><br>
		<input type="submit" name="login_patient" value="LOGIN" class="btn btn-success"></input>
		<input type="submit" value="RESET" class="btn btn-danger"></input>
	</form>
</div>
</div>
</div>









<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>