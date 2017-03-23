<?php 
	$start_time=$_POST['time'];
	$date=$_POST['date'];
	$email=$_POST['email'];
	
	
	/*echo $start_time;
	echo (int)$start_time;
	echo "<br>";*/
	$endTime = strtotime("+1 hours", strtotime($start_time));
	$end_time= date('h:i', $endTime);
	if((int) $start_time >= 12)
	$end_time = date("H:i", strtotime("$end_time PM"));
	/*echo $end_time;*/

	require_once ("MyLib.php");
	$sql = "INSERT INTO time_table (email, booked_flag,start_time,end_time,date)
VALUES ('$email', 1, '$start_time','$end_time','$date')";
	/*echo $sql;*/
	mysql_query($sql);
	$n=mysql_affected_rows();
	if($n==0)
	{
		echo "error h bhai!!! error h!!";
		die();
	}
	else 
	{
		header('Location: details.php');
		# code...
	}

?>
