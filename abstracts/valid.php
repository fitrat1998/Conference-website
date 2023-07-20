<?php
 include'../config.php';

    $errors = array();

    echo $id = $_POST['id'];

    if(!empty($_POST['first_name'])) $first_name = trim($_POST['first_name']);
    else $errors = "Please enter your firstname";

    if(!empty($_POST['last_name'])) $last_name = trim($_POST['last_name']);
    else $errors = "Please enter your lastname";

    if(!empty($_POST['abstract'])) $abstract = trim($_POST['abstract']);
    else $errors = "Please enter your abstracts";

    if(!empty($_POST['keyword'])) $keyword = trim($_POST['keyword']);
    else $errors = "Please enter your keywords";

    if(!empty($_POST['email'])) $email = trim($_POST['email']);
    else $errors = "Please enter your email";

    if(!empty($_POST['phone'])) $phone = trim($_POST['phone']);
    else $errors = "Please enter your phone";

    $sql = mysqli_query($con,"SELECT * FROM users WHERE email = '$email'");
    $res = mysqli_fetch_assoc($sql);

    $file_exp = strtolower(end(explode(".", $_FILES['file']['name'])));
    $exp = array("doc","rtf","docx");

    if(!empty($_FILES['file']['name'])){
        $size = $_FILES['file']['size']/1024;
        if($size < 2048) {
            if(in_array($file_exp, $exp)) {
               $file = $_FILES['file']['name'];
               $tmp = $_FILES['file']['tmp_name'];  
            }
            else {
                $errors = "Uploading file must be only ms word doc or rtf";
            }
        }
        else {
            $errors = "Your file must be less than 2 mb";
        }
    }
    else {
        $errors = "Please upload your file";
    }

    $exists = mysqli_query($con,"SELECT * FROM submit WHERE email = '$email' AND file = '$file'");
    $rows = mysqli_fetch_assoc($exists);

    if($res['email'] != $email) {
        $errors = "Your email must be the same with registered email";
        if($errors) {
            print_r($errors);
        }
    }
    else {

        if($rows['file']==$file) {
            $errors = "The file already exists";
            if($errors){
             print_r($errors);
            }
        }
        else{
           $sql = "INSERT INTO submit (first_name,last_name,abstracts,keywords,email,phone,file) VALUES('$first_name','$last_name','$abstract','$keyword','$email','$phone','$file')"; 

            $res = mysqli_query($con,$sql);
            move_uploaded_file($tmp, "files/".$file);
            echo "uploaded"; 
        }

    }
  
?>
