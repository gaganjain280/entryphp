<!DOCTYPE html>
<?php     
session_start();
include '../include/config.php';
?>

<html lang="en">


<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4><?php echo $_SESSION['name'];?></h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
        <li><a href="email_list.php">Inbox</a></li>
      </ul><br>
      
    </div>

    <div class="col-sm-9">
      <h4>Write Email</h4>
<form id="EmailForm" action="../backend/send_mail.php" method="post" style="border:1px solid #ccc">
     <form role="form">
     	   <div class="cart-body">
     	   	<div class="form-group">
         <input type="hidden" class="form-control" name="send_mail" value="<?php echo $_SESSION['email'];?>" rows="3" required/>

         <input type="email" class="form-control" placeholder="To" name="reciever_mail" rows="3" required/>
         <input type="text" class="form-control" placeholder="subject" rows="3" name="subject" required/>
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="3" placeholder="Content" name="content" required></textarea>
        </div>
    </div>
         <!-- <button type="submit" class="signupbtn btn btn-success" onclick="sendData()"<button> -->
      <button type="submit" class="signupbtn btn btn-success"onclick="sendData()">Submit</button>
      </form>
      
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
<script>
  function sendData(){
	 var send_mail = document.getElementByName("send_mail");
	 var subject = document.getElementById("subject");
	 var content = document.getElementById("content");
     var reciever_mail = document.getElementById("reciever_mail");
     var send_mail = document.getElementById("send_mail");
   dataString="send_mail="+send_mail+"&subject="+subject+"&content="+content+"&reciever_mail="+reciever_mail+"&send_mail="+send_mail+"&send_email=";
    alert(dataString);
    $.ajax({
        url: "../backend/send_mail.php",
        data: dataString,
        cache: false,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (result) {
            var resultdata = <?php echo '["' . implode('", "', $result) . '"]' ?>;
    console.log (resultdata);
   
        }
    });
    }
</script>