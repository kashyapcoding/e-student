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
	<link rel="stylesheet" type="text/css" href="css/buttons.bootstrap.css">
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
	


	<script type="text/javascript" language="javascript" src="js/dataTables.buttons.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/buttons.bootstrap.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js">
	</script>


	<script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js">
	</script>

	<script type="text/javascript" language="javascript" src="js/buttons.html5.js">
	</script>


	<script type="text/javascript" language="javascript" src="js/buttons.print.js">
	</script>

	<script type="text/javascript" language="javascript" src="js/buttons.colVis.js">
	</script>

	<script type="text/javascript" language="javascript" src="datatables/resources/syntax/shCore.js">
	</script>
	<script type="text/javascript" language="javascript" src="datatables/resources/demo.js">
	</script>
	<!-- End Combine and Compress These CSS Files -->
	
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"></link>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="css/mystyle.css" rel="stylesheet"></link>
    <style>
    @media screen and (min-width: 768px){
            .rwd-break { display: none; }
        }
    </style>
	<script type="text/javascript" language="javascript" class="init">
	
$(document).ready(function() {
	$('#example').DataTable( {
		"lengthMenu": [10,25,50,100],
		"scrollY": "400px",
  		"scrollCollapse": true,
  		responsive: true,
  		//fixedHeader: true,
		language: {
			lengthMenu: 'Rows : _MENU_' ,
			 search: '<i style="font-size:15px;" class="fa fa-search"></i>',
        	 searchPlaceholder: '',
        	 //binfo: "Show page _ENTRY_ of _PAGES_",
        	 sInfo: '<i style="font-size:15px;" class="fa fa-list"></i> _START_ - _END_ of _TOTAL_',
        	  paginate: {
                "previous": '<i class="material-icons">keyboard_arrow_left</i>',
                    "next": '<i class="material-icons">keyboard_arrow_right</i>'
            }
    },
		columnDefs: [
			{
				targets: [ 0, 1, 2, 3, 4 ],
				className: 'mdl-data-table__cell--non-numeric'
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
<br>

<div class="row">

<div class="col-sm-6 col-md-4">
 <div class="btn-group btn-group-justified" id="rrr" data-toggle="buttons">
 <label class="btn btn-default active">
    <input type="radio" name="fb_type" value="Suggest" id="option_radio1" autocomplete="off" checked> All
  </label>
  <label class="btn btn-default">
    <input type="radio" name="fb_type" value="Suggest" id="option_radio1" autocomplete="off" > 5
  </label>
  <label class="btn btn-default">
    <input type="radio" name="fb_type" value="Problem" id="id_problem" autocomplete="off"> 6
  </label>
  <label class="btn btn-default">
    <input type="radio" name="fb_type" value="Praise" id="option_radio3" autocomplete="off"> 7
  </label>
  <label class="btn btn-default">
    <input type="radio" name="fb_type" value="Other" id="option_radio4" autocomplete="off"> 8
  </label>
  <label class="btn btn-default">
    <input type="radio" name="fb_type" value="Other" id="option_radio4" autocomplete="off"> 9
  </label>
  <label class="btn btn-default">
    <input type="radio" name="fb_type" value="Other" id="option_radio4" autocomplete="off"> 10
  </label>
</div>
</div>
<br class="rwd-break" />
<div class="col-sm-6 col-md-4">
 <div class="btn-group btn-group-justified " data-toggle="buttons">
 <label class="btn btn-default active">
    <input type="radio" name="fb_type" value="Suggest" id="option_radio1" autocomplete="off" checked> All
  </label>
  <label class="btn btn-default">
    <input type="radio" name="fb_type" value="Suggest" id="option_radio1" autocomplete="off" > A
  </label>
  <label class="btn btn-default">
    <input type="radio" name="fb_type" value="Problem" id="id_problem" autocomplete="off"> B
  </label>
  <label class="btn btn-default">
    <input type="radio" name="fb_type" value="Suggest" id="option_radio1" autocomplete="off" > C
  </label>
  <label class="btn btn-default">
    <input type="radio" name="fb_type" value="Suggest" id="option_radio1" autocomplete="off" > D
  </label>
  <label class="btn btn-default">
    <input type="radio" name="fb_type" value="Problem" id="id_problem" autocomplete="off"> E
  </label>
  </div>
  </div>

</div>
<br>
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
   	$sql="SELECT * FROM s_details ORDER BY s_id DESC";
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
		<script>
		$(document).ready(function(){
    // Use only for V1
    $('#radioBtn span').on('click', function(){
        var sel = $(this).data('value');
        var tog = $(this).data('toggle');
        $('#'+tog).val(sel);
        // You can change these lines to change classes (Ex. btn-default to btn-danger)
        $('span[data-toggle="'+tog+'"]').not('[data-value="'+sel+'"]').removeClass('active btn-primary').addClass('notActive btn-default');
        $('span[data-toggle="'+tog+'"][data-value="'+sel+'"]').removeClass('notActive btn-default').addClass('active btn-primary');
    });
    
   
});
		</script>