
<?php     
session_start();
include 'config.php';
$email=$_POST['email'];
 if($email!=""){
        $email=$_POST['email'];
        $psw=$_POST['psw'];
        $str = "Hello";
        $enc_psw =sha1($psw);
        $sql = "select * from user_register where email='$email' and password='$enc_psw'";
    $result = mysql_query($sql,$conn);
     while($row = mysql_fetch_array($result)) {
	     $email= $row['email'];
	     $_SESSION['email'] = $email;
	     $name= $row['name'];
	     $_SESSION['name'] = $name;
	     header("location:../user/user_home.php");
	   }

 }
?>