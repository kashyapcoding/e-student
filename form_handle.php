<?php
	require_once ("configure.php");

	$f_name=mysqli_real_escape_string($conn,$_POST['f_name']);
	$l_name=mysqli_real_escape_string($conn,$_POST['l_name']);
	$s_std=$_POST['s_std'];
	$s_div=$_POST['s_div'];
	$s_te=$_POST['s_te'];
	$s_grade=calc_grade($s_te);

	date_default_timezone_set('Asia/Kolkata');
	$s_Date = date("Y-m-d H:i:s");

	function calc_grade($te)
	{
			if($te>=36 && $te<=40)		 return 'A+';
			else if ($te>=32 && $te<=35) return 'A';
			else if ($te>=28 && $te<=31) return 'B+';
			else if ($te>=24 && $te<=27) return 'B';
			else if ($te>=20 && $te<=23) return 'C+';
			else if ($te>=16 && $te<=19) return 'C';
			else if ($te>=12 && $te<=15) return 'D+';
			else if ($te>=8 && $te<11)   return 'D';
			else if ($te<8) 			 return 'E';
			else  			 			 return 'Error';
	}

	$sql="INSERT INTO s_details(f_name,l_name,s_std,s_div,s_te,s_grade,s_date) 
	VALUES('$f_name','$l_name','$s_std','$s_div','$s_te','$s_grade','$s_Date')";

	if ($conn->query($sql) == TRUE)
					 {
    					echo '<script language="Javascript">
							alert ("Student Details Added.");
							window.location.replace("index.php");	//redirects to dashboard
							</script>';
					 } 
						else {
    							echo "Error: " . $sql . "<br>" . $conn->error;
    							echo '<script language="Javascript">
								alert ("Error: '.$conn->error.'");
								//window.location.replace("index.php");
								</script>';
							 }
					
 ?>
