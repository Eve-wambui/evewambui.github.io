<?php 
$connection=mysqli_connect('localhost', 'root', '', 'hmsdb');

if (isset($_POST['login_doc'])) {
	# code...
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="SELECT * FROM logindoc WHERE username='$username' AND password='$password'";
	$result=mysqli_query($connection, $query);
	if (mysqli_num_rows($result)==1) {
		# code...
		header("location:docnav.php");
	} else {
		echo "<script>alert('Incorrect username or password')</script>";
		echo "<script>window.open('doclogin.php','_self')</script>";
	}
}

// //submit diagnosis

// if (isset($_POST['pat_diag'])) {
// 	# code...
// 	$did=$_POST['did'];
// 	$date=$_POST['date'];
// 	$fname=$_POST['fname'];
// 	$lname=$_POST['lname'];
// 	$age=$_POST['age'];
// 	$symp=$_POST['symp'];
// 	$diag=$_POST['diag'];
// 	$presc=$_POST['presc'];

// 	$qq="INSERT INTO diag(docid,d_ate,fname,lname,age,symptoms,diagnosis,precription)
// 	VALUES('$did','$date', '$fname','$lname','$age','$symp','$diag','$presc')";
// 	$result1=mysqli_query($connection,$qq);
// 	if ($result1) {
// 		// # code...
// 		// echo "<script>alert('Submitted successfully')</script>";
// 		// echo "<script>window.open('docnav.php','_self')</script>";
// 		header('location:docnav.php');
// 	}

// }

//REGISTER NEW PATIENT
if (isset($_POST['reg_user'])) {
	# code...
	$dor=$_POST['dor'];
	$f_name=$_POST['f_name'];
	$l_name=$_POST['l_name'];
	$a_ge=$_POST['a_ge'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];

	$qqq="INSERT INTO patients(dor,fname,lname,age,email,password)
	VALUES('$dor','$f_name','$l_name','$a_ge','$email','$pwd')";
	$result2=mysqli_query($connection,$qqq);
	if ($result2) {
		# code...
		echo "<script>alert('Registered successfully')</script>";
		echo "<script>window.open('patientnav.php','_self')</script>";
	}
}
//PATIENT LOGIN
if (isset($_POST['login_patient'])) {
	# code...
	$email=$_POST['mail'];
	$password=$_POST['pass'];
	$query1="SELECT * FROM patients WHERE email='$email' AND password='$password'";
	$result=mysqli_query($connection, $query1);
	if (mysqli_num_rows($result)==1) {
		# code...
		header("location:patientnav.php");
	} else {
		echo "<script>alert('Incorrect username or password')</script>";
		echo "<script>window.open('patientlogin.php','_self')</script>";
	}
}

//SUBMIT APPOINTMENT
if (isset($_POST['submit'])) {
	# code...
	$name=$_POST['name'];
	$email=$_POST['email'];
	$app=$_POST['app'];

	$qqq="INSERT INTO appoint(name,email,appointment)
	VALUES('$name','$email','$app')";
	$result2=mysqli_query($connection,$qqq);
	if ($result2) {
		# code...
		echo "<script>alert('Submitted successfully')</script>";
		header("location:patientnav.php");
	}
}


if (isset($_POST['s_ubmit'])) {
	# code...
	$name=$_POST['n_ame'];
	$email=$_POST['e_mail'];
	$app=$_POST['appt'];

	$qqq="INSERT INTO appoint(name,email,appointment)
	VALUES('$name','$email','$app')";
	$result2=mysqli_query($connection,$qqq);
	if ($result2) {
		# code...
		echo "<script>alert('Submitted successfully')</script>";
		header("location:docnav.php");
	}
}




 ?>