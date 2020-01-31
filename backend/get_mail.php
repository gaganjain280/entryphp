
<?php     
include '../include/config.php';

if (isset($_POST['getMailList'])) {
   $email=$_POST['email'];    
        // $result=mysql_query($sql,$conn);
    $return_arr = array();
echo"select * from mail_logs where reciever_email='$email'";
$fetch = mysql_query("select * from mail_logs where reciever_email='$email'"); 

while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {

      $row_array=$row;
    array_push($return_arr,$row_array);
}

echo json_encode($return_arr);

 }
?>