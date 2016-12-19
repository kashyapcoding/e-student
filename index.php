<html>

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="fav.png.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Student</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"></link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="css/mystyle.css" rel="stylesheet"></link>
</head>

<body>
<?php include_once("navbar.php");   ?>

<form id="form1" class="well form-horizontal" action="form_handle.php" method="POST"  enctype="multipart/form-data">
        <fieldset>
            <div class="container">
                <!-- Form Name -->
                <legend><center>Add Student Details</center></legend>

                <?php $si=1;?>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput"><?php echo $si++ ?> . First Name  </label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="textinput" name="f_name" type="text" placeholder="First Name" class="form-control input-md" required="" pattern=".{3,20}" title="Input Range 3-20 characters"  autofocus="">
                        </div>
                    </div>
                </div>


                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput"><?php echo $si++ ?> . Last Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="textinput" name="l_name" type="text" placeholder="Last Name" class="form-control input-md" pattern=".{1,20}" title="Input Range 1-20 characters">
                        </div>
                    </div>
                </div>


 <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic"><?php echo $si++ ?> . Standard</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><b>STD</b></span>
                            <select id="id_std" name="s_std" class="form-control" required="" >
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                </div>

    <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic"><?php echo $si++ ?> . Division</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><b>DIV</b></span>
                            <select id="id_div" name="s_div" class="form-control" required="" >
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="s_te"><?php echo $si++ ?> .TE</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                            <input id="id_Marks" name="s_te" type="number" placeholder="Marks" class="form-control input-md" required min="0" max="40" title="Marks Range: 0-40">
                            <div class="input-group-addon">.00</div>
                        </div>
                    </div>
                </div>


<!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submit"></label>
                    <div class="col-md-4">
                    <center>
                        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Submit </span>
                        </button>
                    </center>
                    </div>
                </div>
        </fieldset>
    </form>
    </body>