<?php

print_r($_POST);

// if(isset($_POST['reg'])) {

		if(!empty($_POST['deegre'])) trim( $deegre = $_POST['deegre']); 
		else  die("Error");

		if(!empty($_POST['s_name'])) trim(  $s_name = $_POST['s_name']);
		else  die("Error");

		if(!empty($_POST['email'])) trim($email = $_POST['email']);
				)else  die("Error");

		if(!empty($_POST['l_name'])) trim( $l_name = $_POST['l_name']);
		else  die("Error");

		if(!empty($_POST['f_name'])) trim(  $f_name = $_POST['f_name']);
		else die("Error");

		if(!empty($_POST['visa'])){
			if($_POST['visa']=="true") $visa = true;
			else $visa = false;
		}
		else die("Error");
 		
 		if(!empty($_POST['extra'])){
 			if($_POST['visa']=="true") $visa = true;
			else $visa = false;
 		}
		else  die("Error");

		if(!empty($_POST['country'])) trim($country = $_POST['country']);
		else  die("Error");

		if(!empty($_POST['zipcode']))  trim($zipcode = $_POST['zipcode']);
		else die("Error");

		if(!empty($_POST['address'])) trim($address = $_POST['address']);
		else  die("Error");

		if(!empty($_POST['company'])) trim($company = $_POST['company']);
		else  die("Error");

		if(!empty($_POST['city']))  trim($city = $_POST['city']);
		else die("Error");

		if(!empty($_POST['phone'])) trim($phone = $_POST['phone']);
		else  die("Error");

		if(!empty($_POST['fax']))  trim($fax = $_POST['fax']);
		else die("Error");

		if(!empty($_POST['title_paper'])) trim($title_paper = $_POST['title_paper']);
		else  die("Error");

		if(!empty($_POST['type_paper'])) trim($type_paper = $_POST['type_paper']);
		else die("Error");

		if(!empty($_POST['subject']))  $subject = $_POST['subject'];
		else  die("Error");

		if(!empty($_POST['code'])) $code = $_POST['code'];
		else  die("Error");

		if(!empty($_POST['password'])) $code = md5($_POST['code']);
		else  die("Error");
	
// }

?>