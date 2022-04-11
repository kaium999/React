<?php
	    header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: *");
		require 'connection.php';
		$query='select *from user';
		/*if(mysqli_query($conn,$query)){
			return"successfully"
		}*/


		$result=mysqli_query($conn,$query);
		$json_array= array();
		while($row=mysqli_fetch_assoc($result)){
			$json_array[]=$row;
		}
		echo json_encode($json_array);


?>