<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="fav.png.">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
	<title>Student List</title>

<!--
Uncomment the below code and add class "responsive" to kick in Zurb Responsive Pattern for table
  	<link rel="stylesheet" href="js/zurb/stylesheets/app.css">
	<link rel="stylesheet" href="js/zurb/responsive-tables.css">
	<script src="js/zurb/javascripts/jquery.min.js"></script>
	<script src="js/zurb/responsive-tables.js"></script>
-->
	

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
	<link rel="stylesheet" type="text/css" href="datatables/media/css/dataTables.material.css">
	<link rel="stylesheet" type="text/css" href="datatables/resources/syntax/shCore.css">
	<link rel="stylesheet" type="text/css" href="datatables/resources/demo.css">
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="css/material-design-color-palette.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="datatables/media/js/jquery.dataTables.js">
	</script>
	<script type="text/javascript" language="javascript" src="datatables/media/js/dataTables.material.js">
	</script>
	<script type="text/javascript" language="javascript" src="datatables/resources/syntax/shCore.js">
	</script>
	<script type="text/javascript" language="javascript" src="datatables/resources/demo.js">
	</script>
	<!-- End Combine and Compress These CSS Files -->
	
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"></link>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="css/mystyle.css" rel="stylesheet"></link>
	<script type="text/javascript" language="javascript" class="init">
	
$(document).ready(function() {
	$('#example').DataTable( {
		columnDefs: [
			{
				//targets: [ 0,1 ],
				//className: 'mdl-data-table__cell--non-numeric'
			}
		]
	} );

} );

	</script>


</head>

<body class="dt-example dt-example-material">
<?php include_once("navbar.php");   ?>
<div class="container-fluid">
<center><h3>Student Scores</h3></center>
<section>
<div style="overflow-x:auto;">
<script>
        function msg()
        { return confirm ("Are you sure want to delete this record?\nNote: This action cannot be undone");	}
</script>
<table id="example" class="mdl-data-table table-responsive" cellspacing="0" width="100%" >
			<thead>
					<tr>
						<th>#</th>
						<th> <i class="material-icons">person</i> </i> Name</th>
						<th> Class</th>
						<th> <i class="material-icons">check</i> Marks</th>
						<th> <i class="material-icons">school</i> Grade</th>
						<th> Edit</th>
						<th> Delete</th>
					</tr>
			</thead>
			<tbody>
   <?php
   	require("configure.php");
   	$sql="SELECT * FROM s_details";
   	$result=$conn->query($sql);
	$si_no=0;
	while($row = $result->fetch_assoc()) 
	  	{   $si_no+=1;
	  		$s_id=$row['s_id'];
	  		echo '<tr>
	  			  <td>'.$si_no.'</td>
	  			  <td>'.$row['f_name'].' '.$row['l_name'].'</td>
	  			  <td>'.$row['s_std'].' '.$row['s_div'].'</td>
	  			  <td>'.$row['s_te'].'</td>
	  			  <td>'.$row['s_grade'].'</td>
	  			  <td><a href="edit.php?id='.urlencode(base64_encode($s_id)).'">
	  				<button type="button" class="btn btn-success ">
	  				<span class="glyphicon glyphicon-pencil"></span> 
	  				</button>
	  				</a>
</td>
	  			  <td><a href="delete.php?id='.$s_id.'">
	  				<button type="button" onclick="return msg()" class="btn btn-danger ">
	  				<span class="glyphicon glyphicon-trash"></span> 
	  				</button>
	  				</a></td>';
	  	}//end of while
	
?>

			</tbody>
			</table>
			</div>
		</div>
		</section>