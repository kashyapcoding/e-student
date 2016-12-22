<?php
	session_start();
	require_once ("configure.php");
	$mode=$_GET['mode'];

	$f_name=mysqli_real_escape_string($conn,$_POST['f_name']);
	$l_name=mysqli_real_escape_string($conn,$_POST['l_name']);
	$s_std=$_POST['s_std'];
	$s_div=$_POST['s_div'];
	$s_te=$_POST['s_te'];
	$s_grade=calc_grade($s_te,$s_std);

	date_default_timezone_set('Asia/Kolkata');
	$s_Date = date("Y-m-d H:i:s");

	function calc_grade($te,$s_std)
	{
			if($s_std==9 || $s_std==10 )
		{
			if($te>=36 && $te<=40)		 return 'A+';
			else if ($te>=32 && $te<=35) return 'A';
			else if ($te>=28 && $te<=31) return 'B+';
			else if ($te>=24 && $te<=27) return 'B';
			else if ($te>=20 && $te<=23) return 'C+';
			else if ($te>=16 && $te<=19) return 'C';
			else if ($te>=12 && $te<=15) return 'D+';
			else if ($te>=8 && $te<=11)  return 'D';
			else if ($te<8) 			 return 'E';
			else  			 			 return 'Error';
		}
			else if($s_std==8)
		{
			if($te>=30 && $te<=40)		 return 'A';
			else if ($te>=24 && $te<=29) return 'B';
			else if ($te>=18 && $te<=23) return 'C';
			else if ($te>=13 && $te<=17) return 'D';
			else if ($te<13) 			 return 'E';
			else  			 			 return 'Error';
		}
		else if($s_std<=7 && $s_std>=5 )
		{
			if($te>=19 && $te<=25)		 return 'A';
			else if ($te>=15 && $te<=18) return 'B';
			else if ($te>=11 && $te<=14) return 'C';
			else if ($te>=8 && $te<=10)  return 'D';
			else if ($te<8) 			 return 'E';
			else  			 			 return 'Error';
		}
	}	//endof function

	if($mode=='add')
   {	
   		$action='added';
   		$loc='index.php';
		$sql="INSERT INTO s_details(f_name,l_name,s_std,s_div,s_te,s_grade,s_date) 
		VALUES('$f_name','$l_name','$s_std','$s_div','$s_te','$s_grade','$s_Date')";
   }
	else if($mode=='ed')
	{
		$id=urldecode(base64_decode($_GET['id']));
		$action='updated';
		$loc='view_students.php';
		$sql="UPDATE s_details
		 SET f_name='$f_name',
		 l_name='$l_name',
		 s_std='$s_std',
		 s_div='$s_div',
		 s_te='$s_te',
		 s_grade='$s_grade',
		 s_date='$s_Date'
		 WHERE s_id=$id";
	}
	if ($conn->query($sql) == TRUE)
					 {
    					echo '<script language="Javascript">
							//alert ("Student Details '.$action.'");
							window.location.replace("'.$loc.'");
							</script>';
							$_SESSION['add_status']='TRUE';
					 } 
						else {
    							echo "Error: " . $sql . "<br>" . $conn->error;
    							echo '<script language="Javascript">
								alert ("Error: '.$conn->error.'");
								//window.location.replace("'.$loc.'");
								</script>';
							 }
	 ?>