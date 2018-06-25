<!DOCTYPE html>
<html>
<head>
	<title>DOCTOR NAVIGATION|PRIMEHOSPITAL</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url(pic/ab.jpg); height: 290px;"></div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<div class="list-group">
				<a href="" class="list-group-item active" style="background-color: #ff9933; color: black; border-color: #ff9933;">Appointments</a>
				<a class="btn btn-primary" data-toggle="collapse" href="" role="button">View Appointments</a><br>
				<a href="#docappoint" class="btn btn-primary" data-toggle="collapse">New Appointment</a>
				<div class="collapse" id="docappoint">
					<form class="form-group" action="function.php" method="POST">
					<label style="color: black;">Name:</label><br>
					<input type="text" name="n_ame" class="form-control"><br>
					<label style="color: black;">Email:</label><br>
					<input type="email" name="e_mail" class="form-control"><br>
					<label style="color: black;">Choose Appointment:</label><br>
					<select class="form-control" name="appt">
						<option value="Dr Kariuki[1400-1445hrs]">Dr Kariuki[1400-1445hrs]</option>
						<option value="Dr Yvonne[1030-1115hrs]">Dr Yvonne[1030-1115hrs]</option>
						<option value="Dr Nyarua[1400-1445hrs]">Dr Nyarua[1400-1445hrs]</option>
						<option value="Dr Wambui[1815-1900hrs]">Dr Wambui[1815-1900hrs]</option>
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
				<input type="submit" name="s_ubmit" value="SUBMIT" class="btn btn-success">
			</form>
				</div>
			</div>
			<hr>
			<div class="list-group">
				<a href="" class="list-group-item active"  style="background-color: #ff9933; color: black; border-color: #ff9933;">Patient</a>
				<a href="" class="btn btn-primary" role="button">Patient Details</a><br>
				<a href="patientreg.php" class="btn btn-primary">Add new patient</a>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
			<h3>DIAGNOSIS</h3>
				<div class="card-body"  style="background-color: #ff9933; color: black; border-color: #ff9933;">
					<form class="form-group" action="func.php" method="POST">
						<label>DocID:</label><br>
						<input type="text" name="did" class="form-control"><br>
						<label>DATE:</label><br>
						<input type="date" name="date" class="form-control"><br>
						<label>FIRST NAME:</label><br>
						<input type="text" name="fname" class="form-control"><br>
						<label>LAST NAME:</label><br>
						<input type="text" name="lname" class="form-control"><br>
						<label>AGE:</label><br>
						<input type="text" name="age" class="form-control"><br>
						<label>SYMPTOMS:</label><br>
						<textarea rows="10" cols="70" name="symp"></textarea><br>
						<label>DIAGNOSIS:</label><br>
						<textarea rows="10" cols="70" name="diag"></textarea><br>
						<label>PRESCRIPTION:</label><br>
						<textarea rows="10" cols="70" name="presc"></textarea><br>
						<input type="submit" name="pat_diag" value="SUBMIT" class="btn btn-success">
					</form>


				</div>
			</div>
		</div>

		
	</div>
</div>









<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>