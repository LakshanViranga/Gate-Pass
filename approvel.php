<?php

session_start();
if(empty($_SESSION['user_login'])){
  header('location:index.php');
}
if(isset($_POST['search'])){
  $name = "pending";
  $begin = "2019-09-25";

  $sql = "SELECT `pass_id`,`user_name`,`date`, `time`, `status` FROM `pass_details` where  `date`=$begin  and `status`='$name' ";
  $search_result = filterable($sql);
}else{
    
    $name = "pending";
  $sqli = "SELECT `pass_id`,`user_name`,`date`, `time`, `status` FROM `pass_details` where `status`='$name' ";
  $search_result = filterable($sqli);
}


function filterable($query){
  include('include/connection.php');
  $result = mysqli_query($connection,$query);
  return $result ;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gate Pass</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="request.css">
    <?php   include('include/admin_nav.php');?>

</head>
<body>
<center>
        <br><br><br>
        <h2>Approve of GatePasses</h2>

        <div class="container col-md-8 col-md-offset-2">
            <form action="approvel.php" method="post">
                <br>
                <br>
                <table class="table table-borderd table-responsive " style=" color: black;" BORDER=1 BORDERCOLOR=GReen >
                    <thead >
                        <tr bgcolor="#3498DB">
                            <th style=" color: white;">#</th>
                            <th style=" color: white;">Name</th>
                            <th style=" color: white;">Date</th>
                            <th style=" color: white;">Time</th>
                            <th style=" color: white;">Status</th>
                            <th style=" color: white;">Approve</th>
                            <th style=" color: white;">Reject</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                       while($row = mysqli_fetch_array($search_result)): ?>                    
                        <tr>
                          <td><?php echo $row[0]; ?></td>
                          <td><?php echo $row[1]; ?></td>
                          <td><?php echo $row[2]; ?></td>
                          <td><?php echo $row[3]; ?></td>
                          <td><?php echo $row[4]; ?></td>
                          <td>
                                <button <?php echo $row[0] ;
                                if(isset($_POST['accept'])){
                                  include('include/connection.php');
                                  $status = "Accept";
                                  $sql = "UPDATE `pass_details` SET `status` = '$status' where `pass_id`= '$row[0]' ";
                                  $result = mysqli_query($connection,$sql);
                                  echo '<script language = "javascript">';
                                  echo 'alert("Request Accept")';
                                  echo '</script>';

                                }
                                ?>
                                   type="submit" class="btn btn-primary btn-xs" name="accept">Click Here</button>
                            </td>
                            <td>
                            <button <?php echo $row[0] ;
                                if(isset($_POST['accept'])){
                                  include('include/connection.php');
                                  $status = "Reject";
                                  $sql = "UPDATE `pass_details` SET `status` = '$status' where `pass_id`= '$row[0]' ";
                                  $result = mysqli_query($connection,$sql);
                                  echo '<script language = "javascript">';
                                  echo 'alert("Request Reject")';
                                  echo '</script>';
                                }
                                ?>
                                   type="submit" class="btn btn-primary btn-xs" name="accept">Click Here</button>
                            </td>
                       </tr>                   
                    <?php endwhile;  ?>
                   </tbody>
 
</table>

</form>
</div>

</center>
</body>
</html>