<!DOCTYPE html>
<html>
<head>
	<title>NAVIGATE|PRIMEHOSPITAL</title>
	<style type="text/css">
		body{
			background-image: url(pic/ac.jpg);
		}
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<div class="row" style="margin-top: 100px;">
	<div class="col-md-6">
		<button type="button" class="btn btn-primary btn-lg btn-block"  data-toggle="collapse" data-target="#appoint">MAKE AN APPOINMENT
		</button>
		<div class="collapse" id="appoint">
			<form class="form-group" action="function.php" method="POST">
				<label style="color: black;">Name:</label><br>
				<input type="text" name="name" class="form-control"><br>
				<label style="color: black;">Email:</label><br>
				<input type="email" name="email" class="form-control"><br>
				<label style="color: black;">Choose Appointment:</label><br>
				<select class="form-control" name="app">
				<option value="Dr Kariuki[1400-1445hrs]">Dr Kariuki[1400-1445hrs]</option>
				<option value="Dr Yvonne[1030-1115hrs]">Dr Yvonne[1030-1115hrs]</option>
				<option value="Dr Nyarua[1400-1445hrs]">Dr Nyarua[1400-1445hrs]</option>
				</select>
				<br>
				<label style="color: black;">Choose DoctorID:</label><br>
					<select class="form-control" name="docid">
						<option value="Dr Kariuki[5252]">Dr Kariuki[5252]</option>
						<option value="Dr Yvonne[6674]">Dr Yvonne[6674]</option>
						<option value="Dr Nyarua[6680]">Dr Nyarua[6680]</option>
						<option value="Dr Charles[4152]">Dr Charles[4152]</option>
						<option value="Dr Wambui[6625]">Dr Wambui[6625]</option>
					</select>
				<input type="submit" name="submit" value="SUBMIT" class="btn btn-success">
			</form>
		</div>
	</div>
	<div class="col-md-6">
		<button type="button" class="btn btn-primary btn-lg btn-block" disabled="">TREATEMENT HISTORY</button>
	</div>
</div>









<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>