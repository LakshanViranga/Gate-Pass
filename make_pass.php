<?php
if(isset($_POST['pass'])){
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $note = $_POST['note']; 
    $status= "Pending";
    //$psw2 = md5($psw);
    
    include('include/connection.php');
    $query = "INSERT INTO `pass_details`(`user_name`, `date`, `time`,`note`, `status`) VALUES ('".$name."','".$date."','".$time."','".$note."','".$status."')";
     
    if(mysqli_query($connection,$query)){
        echo '<script language = "javascript">';
        echo 'alert("Request Send")';
        echo '</script>';
      }else{
      echo "Error".$sql."<br>".mysqli_error($conn);
      }
    
 
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
    <link rel="stylesheet" href="make_pass.css">

    <?php   include('include/navbar.php');?>
</head>
<body>
<center>
        <br><br><br>
        <h2>Request Gate Pass</h2>

        <div class="container col-md-8 col-md-offset-2">
            <form action="make_pass.php" method="post">
                <br>
                <br>
                <div class="form-group">
                   <label for="inputText2" class="col-sm-4 control-label">Name</label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control" name="name" id="v_dob" placeholder="Date of birth" value="">
                      </div>         
                </div>
                <br>
                <br>
                <div class="form-group">
                   <label for="inputText2" class="col-sm-4 control-label">Date </label>
                      <div class="col-sm-8">
                          <input type="date" class="form-control" name="date" id="v_dob" placeholder="Date of birth" value="">
                      </div>         
                </div>
                <br>
                <br>
                <div class="form-group">
                   <label for="inputText2" class="col-sm-4 control-label">Time </label>
                      <div class="col-sm-8">
                          <input type="time" class="form-control" name="time" id="v_dob" placeholder="Date of birth" value="">
                      </div>         
                </div>
                <br>
                <br>
                <div class="form-group">
                   <label for="inputText2" class="col-sm-4 control-label">Special Note</label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control" name="note" id="v_dob" placeholder="Date of birth" value="">
                      </div>         
                </div>
                <br>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="pass">Request Gate Pass</button>
                </div>

           </form>
</div>

</center>
</body>
</html>