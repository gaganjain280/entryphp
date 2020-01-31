
<?php     
include '../include/config.php';
 $send_mail=$_POST['send_mail'];
 echo $send_mail;
 if($send_mail!=""){
        $send_email=$_POST['send_mail'];
        $reciever_email=$_POST['reciever_mail'];
        $subject=$_POST['subject'];
        $content=$_POST['content'];
        $currentDate = date('Y-m-d'); 
      $sql = "INSERT INTO mail_logs(sender_email, reciever_email, subject, content,send_date) VALUES ('$send_email','$reciever_email','$subject','$content','$currentDate')";
        $res=mysql_query($sql);
        if($res){
             $result[] = "success";
             header("location:../user/user_home.php");
         }else{
             $result[] =  "error";

         }    
}

?>