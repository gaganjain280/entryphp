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
    
<h3 align="center">All Email</h3>
<input type="hidden" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email'];?>" rows="3" required/>
<div class="container">
  <div class="panel">
    <button id="loadData" class="btn btn-default">Load Data</button>

    <table id="example" class="display" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Email </th>
          <th>Name</th>
          <th>Date</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
    </div>
  </div>
</div>

</body>
</html>
 <script type="text/javascript" src="jquery-1.3.2.js"> </script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> </script>
 
 <script type="text/javascript">

 $(document).ready(function() {
  var email = $('#email').val();
        dataString="email="+email+"&getMailList=" ;
        alert(dataString);
       $.ajax({
        url: "../backend/get_mail.php",
        data: dataString,
        cache: false,
        type: 'POST',
        success: function (result) {
        console.log (result);
     for(var i=0;i<result.length;i++)
                    {
                        var opt = new Option(result[i].mail_id);
                       // alert(opt);
                       // $("#op1").append(opt);
                    }
  

        }
    });
    });


</script>
<script language="javascript" type="text/javascript">
<!--


//-->
</script>
?>
