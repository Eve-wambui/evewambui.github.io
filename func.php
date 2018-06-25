<?php 

$connection=mysqli_connect('localhost', 'root', '', 'hmsdb');

//submit diagnosis

if (isset($_POST['pat_diag'])) {
	# code...
	$did=$_POST['did'];
	$date=$_POST['date'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$age=$_POST['age'];
	$symp=$_POST['symp'];
	$diag=$_POST['diag'];
	$presc=$_POST['presc'];

	$qq="INSERT INTO diag(docid,tarehe,fname,lname,age,symptoms,diagnosis,precription)
	VALUES('$did','$date', '$fname','$lname','$age','$symp','$diag','$presc')";
	$result1=mysqli_query($connection,$qq);
	if ($result1) {
		// # code...
		// echo "<script>alert('Submitted successfully')</script>";
		// echo "<script>window.open('docnav.php','_self')</script>";
		header('location:docnav.php');
	}
	

}

 ?>