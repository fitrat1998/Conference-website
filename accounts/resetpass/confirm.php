<?php
 session_start();
 include 'db.php';


 function getRealUserIp(){
    switch(true){
      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      default : return $_SERVER['REMOTE_ADDR'];
    }
 }

 $ip = getRealUserIp();

 if($_POST['confirm'] && $_SESSION['check'] == "true") {


	$sql = mysqli_query($link,"SELECT * FROM reset_password");
	$rows = mysqli_fetch_assoc($sql);

	$select_ip = mysqli_query($link,"SELECT * FROM blocked_ip");
	$rows_ip = mysqli_fetch_assoc($select_ip);



	if($_SESSION['repeat'] == 5) {
		if(strpos($_SERVER['REMOTE_ADDR'],$ip) === 0){
         echo "Your IP blocked because of many attemps";
         $insert_ip = mysqli_query($link,"INSERT INTO blocked_ip (ip) VALUES ('$ip')");
         header("Location:ip.php");	
         exit();
        }
	}
	else {
			$code = $_POST['confirm'];
			$password = md5( $_POST['password']);
			$i = 0;

			if($code==$rows['code']) {
				$email = $rows['email'];
				$now = time();
				if($now - $rows['time'] < 600) {
					$update = mysqli_query($link,"UPDATE users SET password = '$password' WHERE email = '$email'");
					echo "updated";
				}
				else {
					echo "expiring code";
				}
			}
			else {
				$i++;
			    $_SESSION['repeat'] += $i;
			    if($_SESSION['repeat'] < 3) {
				   echo "confirm code is wrong";
			    }
			    else if($_SESSION['repeat'] == 3) {
			      echo "Please check your confirm code with attention your IP blocked after 2 attemps";
			    }
			    else {
			      echo "Please check your confirm code with attention your IP blocked after 1 attemps";
			    }
			}
	}
}
else {
	header("Location:index.php");
}
?>