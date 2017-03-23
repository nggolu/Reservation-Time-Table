<?php 
	$time=$_GET['time'];
	$date=$_GET['date'];
	

?>
<html>
	<head>
		<title>Reservation Time Table</title>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="js/bootstrap.min.js" rel="stylesheet">	
        <script src="js/jquery-3.0.0.min.js"></script>
        	
	</head>
	<body>
		<div class="jumbotron" >
   			<p style="font-size:22px;">Reservation Time Table</p>    
		</div>
		<div class="container">

			<form method="post" action="get_server1.php">
				<div class="form-group row">
              		<div class="col-sm-3"></div>
                	<label for="inputEmail3" class="col-sm-2"><h3>Email Id</h3></label>
                	<div class="col-sm-3">
                    	<input type="email"  placeholder="Email ID"name="email" class="form-control" id="date" require />
                        <input type="hidden"  placeholder="Email ID"name="date" class="form-control" value="<?php echo $date;?>"id="date" require ></input>
                        <input type="hidden"  placeholder="Email ID"name="time" class="form-control" value="<?php echo $time;?>" id="time" require ></input>
                 	</div>
            	</div>
            	<div class="form-group row">
            		<div class="col-sm-5"></div>
            	    <div class="col-sm-3">
                    	<input type="submit"  Value="Reserve"  />
                 	</div>
                </div>
            </form>

         


	</body>
</html>