<?php     
include 'config.php';
  $email=$_POST['email'];
 if($email!=""){
        $email=$_POST['email'];
        $psw=$_POST['psw'];
        $psw_rep=$_POST['psw_rep'];
        $name=$_POST['name'];
        $currentDate = date('Y-m-d'); 
        $enc_psw =sha1($psw);
      $sql = "INSERT INTO user_register(name, email, password, created_date) VALUES ('$name','$email','$enc_psw','$currentDate')";
		$res=mysql_query($sql);
		    header("location:../index.php");
 }
?>