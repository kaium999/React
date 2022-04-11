<?php
	 header('Access-Control-Allow-Origin: *');
     header("Access-Control-Allow-Headers: *");
     header("Access-Control-Allow-Methods:*");
     header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");



	  require 'connection.php';

	  $id=$_GET['id'];
        //echo $id;

	  $query="select *from user where u_id='$id'";
	   $result=mysqli_query($conn,$query);
	   $row=mysqli_fetch_assoc($result);
	   //$json_array=array();
	    //$json_array[]=$row;
	   //echo $json_decode($json_array);
	   echo $json= json_encode($row);
	   //echo $id;
	   //echo json_decode($json_array)
       


?>