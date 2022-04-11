<?php 


   header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: *");
     header("Access-Control-Allow-Methods:*");
     

    	require 'connection.php';
    	
        $id=$_GET['userid'];
        echo $id;
        
    	$query="delete from user where u_id='$id'";

    	if (mysqli_query($conn,$query)){
            echo" delete Successfully";
        }
        else{
            echo"Not Deleted";
        }
        

 ?>