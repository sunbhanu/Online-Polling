<?php
//$ip=$_SERVER['REMOTE_ADDR'];

$qu=$_GET['question'];
$paw=$_GET['pswd'];
$con=mysqli_connect('localhost','database_username','password','database_name');

$q="INSERT INTO `yourpoll` (`question`, `pass`) VALUES ('$qu', '$paw');";
mysqli_query($con,$q);

        $q="SELECT `pollid` FROM `yourpoll` WHERE question='$qu'";
        $res = mysqli_query($con,$q);
        $tablename = mysqli_fetch_array($res);

$q="CREATE TABLE `id8815678_fgietpoll`.`$tablename[0]` ( `id` VARCHAR(100) NOT NULL , `ans` INT(5) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
mysqli_query($con,$q);
mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Poll Detail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Congratulations!</h1>
  <p>Your poll has been created</p> 
</div>
<div class="container" >
  <h4>Link: <I><a href="yourpoll.php?poll=<?php echo $tablename[0] ?>">fgietpoleing.000webhostapp.com/yourpoll.php?poll=<?php echo $tablename[0] ?></a></I></h4>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Result</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
	<div class="col-sm-4">
      <h3><a href="createyourpoll.html">Create Another Poll</a></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Manage Poll</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>
<div class="jumbotron text-center">
  <h5>Contact Us: 9415197362</h5> 
  <h5>About Us: laudu</h5> 
</div>

</body>
</html>
