<?php
header('Access-Control-Allow-Origin: *');
     header("Access-Control-Allow-Headers: *");
		require 'connection.php';
		
		
          


		$post_data=file_get_contents("php://input");


		if(isset($post_data)&& !empty($post_data)){
			$request=json_decode($post_data);
			$id=$_GET['id'];
			echo $id;
			$name=$request->name;
			echo $name;
			$email=$request->email;
			$password=$request->password;

			//$query="insert into user(`uname`,`uemail`,`upassword`) values('Pranto','pranto@gmail.com','1234') where u_id='14'";
			$query="update user set uname='$name',uemail='$email',upassword='$password' where u_id='$id'";
			if(mysqli_query($conn,$query)){
				return"successfull inserted";
			}
			
			
		}
		







?>