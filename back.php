<?php
	$con = mysqli_connect("199.79.62.23","citypalace_vbill","p!2N6h9w","citypalace_vbilling");
	if(isset($_POST['login'])){
		
		$email = $_POST['email'];
		$password = $_POST['password'];

		$login = "SELECT * FROM `admin` WHERE `username` = '$email'";
		$res_login = mysqli_query($con,$login);
		$count = mysqli_num_rows($res_login);

		if($count > 0){
			$row = mysqli_fetch_array($res_login);
			if($password == $row['password']){
				$admin_name = $row['name'];
				session_start();
				$_SESSION['admin'] = $admin_name;
				header('location:manageuser.php');
			}
			else{
				header('location:login.php?q=1');
			}
		}else{
			header('location:login.php?q=2');
		}

		mysqli_close($con);
	}
	/*
	*
	* OPERATIONS FOR GUESTS.
	*
	*/
	//Add Guest
	if(isset($_POST['add_guest'])){
		include 'config.php';
		$name = $_POST['name'];
		$address = $_POST['address'];
		$invoiceno = $_POST['invoiceno'];
		$invoicedate = $_POST['ddate'];
		$adate = $_POST['adate'];
		$ddate = $_POST['ddate'];
		$roomtype = $_POST['roomtype'];
		$plan = $_POST['plan'];
		$checkin = $_POST['checkin'];
		$checkout = $_POST['checkout'];
		$nationality = $_POST['nationality'];
		$roomnights = $_POST['roomnights'];

		$query = "INSERT INTO `user`(`name`,`address`,`nationality`, `invoiceno`, `invoicedate`, `adate`, `ddate`, `roomtype`, `plan`,`roomnights`, `checkin`, `checkout`) VALUES ('$name','$address','$nationality','$invoiceno','$invoicedate','$adate','$ddate','$roomtype','$plan','$roomnights','$checkin','$checkout')";
		$res = mysqli_query($con, $query);
		if($res){
			header('location:manageuser.php?q=1');
		}else{
			header('location:manageuser.php?q=2');
		}
	}
	//Add Bills
	if(isset($_POST['add_bill'])){
		include 'config.php';
		$date = $_POST['date'];
		// $sac = $_POST['sac'];
		$description = $_POST['description'];
		// $gst = $_POST['gst'];
		$rooms = $_POST['rooms'];
		$rate = $_POST['rate'];
		// $disc = $_POST['disc'];
		$user_id = $_POST['user_id'];
		$billtype = $_POST['billtype'];

		if($description == 'Room Tarriff'){
			$sac = '996311';
			if($billtype == 'Old'){
				if($rate <= 2499){
					$gst = 12;
				}
				if($rate >= 2500 && ($rate <= 7499)){
					$gst = 18;
				}
				if($rate >= 7500){
					$gst = 28;
				}
			}
			if($billtype == 'New'){
				if($rate <= 7500){
					$gst = 12;
				}
				if($rate > 7500){
					$gst = 18;
				}
			}
		}
		else{
			$sac = '996331';
			$gst = 5;
		}

		$query = "INSERT INTO `bills`(`user_id`, `date`, `sac`, `description`, `gst`, `rooms`, `rate`, `billtype`) VALUES ('$user_id','$date','$sac','$description','$gst','$rooms','$rate','$billtype')";
		$res = mysqli_query($con, $query);
		if($res){
			header('location:addbill.php?q='.$user_id);
		}else{
			header('location:addbill.php?p=2');
		}
	}
	//UPDATE
	if(isset($_POST['update'])){
		if($_POST['update'] == 'guest'){
			include 'config.php';
			if(isset($_POST["id"]))
			{
				$id = $_POST['id'];
				$query = "SELECT * FROM `user` WHERE `id` = '$id'";
				$result = mysqli_query($con, $query);
				$row = mysqli_fetch_array($result);
				
				echo json_encode($row);
			}
			
		}
	}
	if(isset($_POST['update_guest'])){
		include 'config.php';
		$name = $_POST['name'];
		$address = $_POST['address'];
		$invoiceno = $_POST['invoiceno'];
		$invoicedate = $_POST['invoicedate'];
		$adate = $_POST['adate'];
		$ddate = $_POST['ddate'];
		$roomtype = $_POST['roomtype'];
		$plan = $_POST['plan'];
		$checkin = $_POST['checkin'];
		$checkout = $_POST['checkout'];
		$nationality = $_POST['nationality'];
		$roomnights = $_POST['roomnights'];
		$userid = $_POST['userid'];

		$query = "UPDATE `user` SET `name`='$name',`address`='$address',`nationality`='$nationality',`invoiceno`='$invoiceno',`invoicedate`='$invoicedate',`adate`='$adate',`ddate`='$ddate',`roomtype`='$roomtype',`plan`='$plan',`roomnights`='$roomnights',`checkin`='$checkin',`checkout`='$checkout' WHERE `id` = '$userid'";
		$res = mysqli_query($con, $query);
		if($res){
			header('location:manageuser.php');
		}
	}
	//UPDATE
	if(isset($_POST['update'])){
		if($_POST['update'] == 'bill'){
			include 'config.php';
			if(isset($_POST["id"]))
			{
				$id = $_POST['id'];
				$query = "SELECT * FROM `bills` WHERE `id` = '$id'";
				$result = mysqli_query($con, $query);
				$row = mysqli_fetch_array($result);
				
				echo json_encode($row);
			}
			 
		}
	}
	if(isset($_POST['update_bill'])){
		include 'config.php';
		$date = $_POST['date'];
		// $sac = $_POST['sac'];
		$description = $_POST['description'];
		// $gst = $_POST['gst'];
		$rooms = $_POST['rooms'];
		$rate = $_POST['rate'];
		// $disc = $_POST['disc'];
		$billid = $_POST['billid'];
		$billtype = $_POST['billtype'];
		$userid = $_POST['user_id'];

		if($description == 'Room Tarriff'){
			$sac = '996311';
			if($billtype == 'Old'){
				if($rate <= 2499){
					$gst = 12;
				}
				if($rate >= 2500 && ($rate <= 7499)){
					$gst = 18;
				}
				if($rate >= 7500){
					$gst = 28;
				}
			}
			if($billtype == 'New'){
				if($rate <= 7500){
					$gst = 12;
				}
				if($rate > 7500){
					$gst = 18;
				}
			}
		}
		else{
			$sac = '996331';
			$gst = 5;
		}


		$query = "UPDATE `bills` SET `date`='$date',`sac`='$sac',`description`='$description',`gst`='$gst',`rooms`='$rooms',`rate`='$rate',`billtype`='$billtype' WHERE `id` = '$billid'";
		$res = mysqli_query($con, $query);
		if($res){
			header('location:addbill.php?q='.$userid);
		}
	}

?>