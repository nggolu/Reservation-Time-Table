<html>
	<head>
		<title>Reservation Time Table</title>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="js/bootstrap.min.js" rel="stylesheet">		
	</head>
	<body>
		<div class="jumbotron" >
   			<p style="font-size:22px;">Reservation Time Table</p>    
		</div>
		<div class="container">

			<form method="post" action="set_date.php">
				<div class="form-group row">
              		<div class="col-sm-3"></div>

                	<label for="inputEmail3" class="col-sm-1"><h2>Date</h2></label>

                	<div class="col-sm-3">
                    	<input type="date" name="date" onclick="" class="form-control" id="date" require />
                 	</div>
                 	<div class="col-sm-3">
                    	<input type="submit" Value="Details >>" id="date" />
                 	</div>
            	</div>				
			</form>

		</div>
	</body>
</html>