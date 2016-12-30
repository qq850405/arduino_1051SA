<?php
	error_reporting(0);
	$temporary=$_GET['temporary'];;
	$humidity=$_GET['humidity'];
	$host='127.0.0.1';//ex:120.105.132.80
	$name='root';
	$pwd='';
	$db='';
	$sql_insert="INSERT INTO machineData (temporary, humidity) VALUES ('$temporary', '$humidity')";
	$con=mysql_connect($host,$name,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");

	$result = mysql_query($sql_insert) or die('MySQL insert error');
	echo $result;
	mysql_close($con);
?>
