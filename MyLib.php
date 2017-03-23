<?php 
$cn=mysql_connect("localhost","root","golugarg02");
if(!$cn)
{
	echo "Unable to connect";
	die();
}
$db=mysql_select_db("reservation",$cn);
if(!$db)
{
	echo "Databse does not exist";
	die();
}
 /*function generateId($start,$tablename)
{ global $cn;
	$id=$start;
	$sql="select * from $tablename ";
	$result=mysql_query($sql,$cn);
	$n=mysql_num_rows($result);
	$id=$id+$n;
	return $id;
}*/
?>