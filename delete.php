<?php 	
		include 'config.php';

		if(isset($_GET['q'])){
			if($_GET['delete'] == "user"){
				$id = $_GET['q'];

				$query = "DELETE FROM `user` WHERE `id` = '$id'";
				$res = mysqli_query($con,$query);
				if($res){
					$query2 = "DELETE  FROM `bills` WHERE `user_id` = '$id'";
					$res2 = mysqli_query($con,$query2);
					header('location:manageuser.php');
				}
			}
			if($_GET['delete2'] == "user"){
				$id = $_GET['q'];

				$query = "DELETE FROM `user` WHERE `id` = '$id'";
				$res = mysqli_query($con,$query);
				if($res){
					$query2 = "DELETE  FROM `bills` WHERE `user_id` = '$id'";
					$res2 = mysqli_query($con,$query2);
					header('location:manageuser.php');
				}
			}
			if($_GET['delete3'] == "user"){
				$id = $_GET['q'];

				$query = "DELETE FROM `user` WHERE `id` = '$id'";
				$res = mysqli_query($con,$query);
				if($res){
					$query2 = "DELETE  FROM `bills` WHERE `user_id` = '$id'";
					$res2 = mysqli_query($con,$query2);
					header('location:guesthistory.php');
				}
			}
			if($_GET['delete4'] == "user"){
				$id = $_GET['q'];

				$query = "DELETE FROM `user` WHERE `id` = '$id'";
				$res = mysqli_query($con,$query);
				if($res){
					$query2 = "DELETE  FROM `bills` WHERE `user_id` = '$id'";
					$res2 = mysqli_query($con,$query2);
					header('location:guesthistory.php');
				}
			}
			if($_GET['delete'] == "bill"){
				$id = $_GET['q'];
				$user_id = $_GET['p'];
				$query = "DELETE FROM `bills` WHERE `id` = '$id'";
				$res = mysqli_query($con,$query);
				if($res){
					header('location:addbill.php?q='.$user_id);
				}
			}
		}

 ?>