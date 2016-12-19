<?php
require("configure.php");

$id=$_GET['id'];
$sql="DELETE FROM s_details WHERE s_id=$id";
	if($conn->query($sql)==true)
		{
			echo '<script language="Javascript">
				  //alert ("");
				  window.location.replace("view_students.php");	//redirects to dashboard
				  </script>';
		}
	else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			echo '<script language="Javascript">
			alert ("Error: '.$conn->error.'");
			//window.location.replace("index.php");
			</script>';
		}
