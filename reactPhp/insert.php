<?php 
     header('Access-Control-Allow-Origin: *');
     header("Access-Control-Allow-Headers: *");
		require 'connection.php';


		$post_data=file_get_contents("php://input");

		if(isset($post_data)&& !empty($post_data)){
			$request=json_decode($post_data);

			$name=$request->name;
			$email=$request->email;
			$password=$request->password;

			$query="insert into user(`uname`,`uemail`,`upassword`) values('{$name}','{$email}','{$password}')";

			if(mysqli_query($conn,$query)){
				return"successfull inserted";
			}
			
		}


?>