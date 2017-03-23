<?php 

require_once ("MyLib.php");

$status= array(0,0,0,0,0,0,0,0);
$email = array("0","0","0","0","0","0","0","0");
session_start();
$date = $_SESSION['date'];
$sql="select * from time_table where date = '".$date."'";
/*echo $date;
echo $sql;*/
$result= mysql_query($sql,$cn);
$n=mysql_affected_rows();
/*echo "<br>";
echo $n;
echo "<br>";*/
if($n==0)
{  
    /*echo "bhai 0 rows selected";*/
    $status= array(0,0,0,0,0,0,0,0);
    $email = array("0","0","0","0","0","0","0","0");

}
else if($n > 0 )
    {
        while($rw=mysql_fetch_array($result))
        {

            $emails=$rw["email"];
            $booked_flag=$rw["booked_flag"];
            $start_time = $rw["start_time"];

            /*echo $emails;
            echo $booked_flag;
            echo "<br>";
            echo $start_time;*/
            if ($booked_flag==1) 
            {
                # code...
                if($start_time=='08:00')
                {
                    $email[0]=$emails;
                    $status[0]=1;

                }
                elseif ($start_time=='09:30') 
                {
                    $email[1]=$emails;
                    $status[1]=1;

                    # code...
                }
                elseif ($start_time=='11:00') 
                {
                    $email[2]=$emails;
                    $status[2]=1;

                    # code...
                }
                elseif ($start_time=='12:30') 
                {
                    $email[3]=$emails;
                    $status[3]=1;

                    # code...
                }
                elseif ($start_time=='14:00') 
                {
                    $email[4]=$emails;
                    $status[4]=1;

                    # code...
                }

                elseif ($start_time=='15:30') 
                {
                    $email[5]=$emails;
                    $status[5]=1;

                    # code...
                }
                elseif ($start_time=='17:00') 
                {
                    $email[6]=$emails;
                    $status[6]=1;

                    # code...
                }
                elseif ($start_time=='18:30') 
                {
                    $email[7]=$emails;
                    $status[7]=1;

                    # code...
                }
            }
        }
       /* echo "<br>";
        echo $email[0]." , ".$email[1]." , ".$email[2]." , ".$email[3]." , ".$email[4]." , ".$email[5]." , ".$email[6]." , ".$email[7];
        echo $status[0]." , ".$status[1];*/
    }



echo "<script type='text/javascript'>window.onload = function()
{
     myFunction();
}
</script>";

 ?>
<html>
	<head>
		<title>Reservation Time Table</title>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="js/bootstrap.min.js" rel="stylesheet">	
        <script src="js/jquery-3.0.0.min.js"></script>
        <script type="text/javascript">
        function myFunction()
        {
            var x = document.getElementById("table");
            
            <?php 
                for ($i = 0; $i < count($status); $i++) {
                   
                    # code...
                    if ($status[$i]==1) 
                        {
                            ?>x.getElementsByTagName("td")[3*<?php echo $i; ?>].style.backgroundColor = "yellow";<?php
                        }
                    else
                    {
                        ?>x.getElementsByTagName("td")[3* <?php echo $i; ?>].style.backgroundColor = "green";<?php
                    }
                }

            ?>
            
        };
        </script>	
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
                    	<input type="date"  name="date" value="<?php echo $date; ?>"onclick="" class="form-control" id="date" />
                 	</div>
                 	<div class="col-sm-3">
                    	<input type="submit" onclick="check_date()" Value="Details >>" id="date" />
                 	</div>

            	</div>

            	<div>
            		<div class="col-sm-3"></div>
            		<div class="col-sm-5">
            			<table class="table table-bordered col-sm-5" id="table" >
            				<thead>
     							<tr>
							        <th>Time</th>
							        <th>Reservation</th>
							    </tr>
    						</thead>
    						<tbody>


	            				<tr>
	    							<th >08:00</th>
	    							<td rowspan="2" align="center"style="width:300px; align: center;" onclick="check_reservation0()" id="status0" class="08:00" ><?php echo $email[0];?></td>
	  							</tr>
	  							<tr>
	    							<th>08:30</th>
	  							</tr>
	  							<tr>
	    							<td>09:00</td>
	    							<td style="width:300px; color:grey;"></td>
	    						</tr>


                                <tr>
                                    <th >09:30</th>
                                    <td rowspan="2" align="center" style="width:300px; align: center;" onclick="check_reservation1()" id="status1" class="09:30"><?php echo $email[1];?></td>
                                </tr>
                                <tr>
                                    <th>10:00</th>
                                </tr>
                                <tr>
                                    <td>10:30</td>
                                    <td style="width:300px; color:grey;"></td>
                                </tr>


                                <tr>
                                    <th >11:00</th>
                                    <td rowspan="2" align="center" style="width:300px; align: center;" onclick="check_reservation2()" id="status2" class="11:00"><?php echo $email[2];?></td>
                                </tr>
                                <tr>
                                    <th>11:30</th>
                                </tr>
                                <tr>
                                    <td>12:00</td>
                                    <td style="width:300px; color:grey;"></td>
                                </tr>


                                <tr>
                                    <th >12:30</th>
                                    <td rowspan="2" align="center" style="width:300px; align: center;" onclick="check_reservation3()" id="status3" class="12:30"><?php echo $email[3];?></td>
                                </tr>
                                <tr>
                                    <th>13:00</th>
                                </tr>
                                <tr>
                                    <td>13:30</td>
                                    <td style="width:300px; color:grey;"></td>
                                </tr>


                                <tr>
                                    <th >14:00</th>
                                    <td rowspan="2" align="center" style="width:300px; align: center;" onclick="check_reservation4()" id="status4" class="14:00"><?php echo $email[4];?></td>
                                </tr>
                                <tr>
                                    <th>14:30</th>
                                </tr>
                                <tr>
                                    <td>15:00</td>
                                    <td style="width:300px; color:grey;"></td>
                                </tr>

                                <tr>
                                    <th >15:30</th>
                                    <td rowspan="2" align="center" style="width:300px; align: center;" onclick="check_reservation5()" id="status5" class="15:30"><?php echo $email[5];?></td>
                                </tr>
                                <tr>
                                    <th>16:00</th>
                                </tr>
                                <tr>
                                    <td>16:30</td>
                                    <td style="width:300px; color:grey;"></td>
                                </tr>

                                <tr>
                                    <th >17:00</th>
                                    <td rowspan="2" align="center" style="width:300px; align: center;" onclick="check_reservation6()" id="status6" class="17:00"><?php echo $email[6];?></td>
                                </tr>
                                <tr>
                                    <th>17:30</th>
                                </tr>
                                <tr>
                                    <td>18:00</td>
                                    <td style="width:300px; color:grey;"></td>
                                </tr>

                                <tr>
                                    <th >18:30</th>
                                    <td rowspan="2" align="center" style="width:300px; align: center;" onclick="check_reservation7()" id="status7" class="18:30"><?php echo $email[7];?></td>
                                </tr>
                                <tr>
                                    <th>19:00</th>
                                </tr>
                                <tr>
                                    <td>19:30</td>
                                    <td style="width:300px; color:grey;"></td>
                                </tr>




	    						
  							</tbody>
                        </table>

            		</div>
            	</div>	
			</form>

            <div id="login" hidden >
                <h2>Login</h2>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <p class="input"><input type="text" placeholder="Username" name="username" required></p>
            
                <p class="input"><input type="password" placeholder="Password" name= "password" required> </p>  
            
            <input type="submit" value ="Login">
        </form>
    </div>
		</div>


		<script>

			function check_reservation0()
            {
                var date = document.getElementById("date").value;
                var time = document.getElementById("status0").className;
                console.log(time);
                if(<?php echo $status[0] ?>== 1)
                {
                    window.alert("Sorry bhai !! time is reserved");
                }
                else
                {
                    var url = "get_reserve.php?time="+time+"&date="+date+"";
                    window.location.href = url; 
                    
                }

            }
            function check_reservation1()
            {
                var date = document.getElementById("date").value;
                var time = document.getElementById("status1").className;
                console.log(time);
                console.log(date);
                if(<?php echo $status[1] ?>== 1)
                {
                    window.alert("Sorry bhai !! time is reserved");
                }
                else
                {
                   
                        var url = "get_reserve.php?time="+time+"&date="+date+"";               
                        window.location.href = url; 

                }

            }
            function check_reservation2()
            {
                var date = document.getElementById("date").value;
                var time = document.getElementById("status2").className;
                console.log(time);
                console.log(date);
                if(<?php echo $status[2] ?>== 1)
                {
                    window.alert("Sorry bhai !! time is reserved");
                }
                else
                {
                   
                        var url = "get_reserve.php?time="+time+"&date="+date+"";               
                        window.location.href = url; 

                }

            }
            function check_reservation3()
            {
                var date = document.getElementById("date").value;
                var time = document.getElementById("status3").className;
                console.log(time);
                console.log(date);
                if(<?php echo $status[3] ?>== 1)
                {
                    window.alert("Sorry bhai !! time is reserved");
                }
                else
                {
                   
                        var url = "get_reserve.php?time="+time+"&date="+date+"";               
                        window.location.href = url; 

                }

            }
            function check_reservation4()
            {
                var date = document.getElementById("date").value;
                var time = document.getElementById("status4").className;
                console.log(time);
                console.log(date);
                if(<?php echo $status[4] ?>== 1)
                {
                    window.alert("Sorry bhai !! time is reserved");
                }
                else
                {
                   
                        var url = "get_reserve.php?time="+time+"&date="+date+"";               
                        window.location.href = url; 

                }

            }
            function check_reservation5()
            {
                var date = document.getElementById("date").value;
                var time = document.getElementById("status5").className;
                console.log(time);
                console.log(date);
                if(<?php echo $status[5] ?>== 1)
                {
                    window.alert("Sorry bhai !! time is reserved");
                }
                else
                {
                   
                        var url = "get_reserve.php?time="+time+"&date="+date+"";               
                        window.location.href = url; 

                }

            }
            function check_reservation6()
            {
                var date = document.getElementById("date").value;
                var time = document.getElementById("status6").className;
                console.log(time);
                console.log(date);
                if(<?php echo $status[6] ?>== 1)
                {
                    window.alert("Sorry bhai !! time is reserved");
                }
                else
                {
                   
                        var url = "get_reserve.php?time="+time+"&date="+date+"";               
                        window.location.href = url; 

                }

            }
            function check_reservation7()
            {
                var date = document.getElementById("date").value;
                var time = document.getElementById("status7").className;
                console.log(time);
                console.log(date);
                if(<?php echo $status[7] ?>== 1)
                {
                    window.alert("Sorry bhai !! time is reserved");
                }
                else
                {
                   
                        var url = "get_reserve.php?time="+time+"&date="+date+"";               
                        window.location.href = url; 

                }

            }

</script>


	</body>
</html>