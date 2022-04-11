<?php
	$datahost='localhost';
	$datauser='root';
	$datapass='';
	$dataname='reactjscrud';


	$conn= mysqli_connect($datahost,$datauser,$datapass,$dataname);
	if(!$conn){
		die("Database Connection Failed" .mysqli_connect_error());
	}
	//echo("connection successfully");



?>