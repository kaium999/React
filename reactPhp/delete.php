<?php
	    header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: *");
		require 'connection.php';
		$id=$_GET['userid']
		$query='delete from user where u_id='$id';


		


		if(mysqli_query($conn,$query)){
			echo'delete';
		}
		else{
			echo'fail';
		}

?>