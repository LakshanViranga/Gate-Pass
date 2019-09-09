<?php
session_start();
if(empty($_SESSION['user_login'])){
  header('location:index.php');
}
if(isset($_POST['search'])){
  $name = $_POST['name'];
  $date = $_POST['date'];
  $begin = str_replace("/","-",$date);

  $sql = "SELECT * FROM `pass_details` where  `date`='$begin'  and `user_name`='$name' ";
  $search_result = filterable($sql);
}else{
    
    $name = $_SESSION['user_login'];
  $sqli = "SELECT * FROM `pass_details` limit 5 ";
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
        <h2>Gate Pass Summary</h2>

        <div class="container col-md-8 col-md-offset-2">
            <form class="form-inline" action="all_passes.php" method="post">
                <br>
                <br>
				<div class="form-group mx-sm-3 mb-2">
                  <input type="date" class="form-control" id="inputPassword2" placeholder="Select Date" name="date">
				  <input type="text" class="form-control" id="inputPassword2" placeholder="Search by name" name="name">
                </div>
                  <button type="submit" class="btn btn-primary mb-2" name="search">Search</button><br><br>
                <table class="table table-borderd table-responsive " style=" color: black;" BORDER=1 BORDERCOLOR=GReen >
                    <thead >
                        <tr bgcolor="#3498DB">
                            <th style=" color: white;">#</th>
                            <th style=" color: white;">Name</th>
                            <th style=" color: white;">Date</th>
                            <th style=" color: white;">Time</th>
                            <th style=" color: white;">Special Note</th>
							<th style=" color: white;">Status</th>
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
						  <td><?php echo $row[5]; ?></td>
                       </tr>                   
                    <?php endwhile;  ?>
                   </tbody>
 
</table>

</form>
</div>

</center>
</body>
</html>