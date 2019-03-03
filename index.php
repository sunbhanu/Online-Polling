<?php
$ip=$_SERVER['REMOTE_ADDR'];

$con=mysqli_connect('localhost','database_username','password','database_name');

$q="SELECT ans FROM adminpoll WHERE id='$ip'";
$re=mysqli_query($con,$q);
$i = mysqli_fetch_array($re);
//echo $i[0];
mysqli_close($con);

if($i[0]==1||$i[0]==2||$i[0]==3){
header('Location: adminpollresult.php');}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>FGIET Poll</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Are you attending IM class ?</h1>
  <p>(FGIET Computer Science 3rd year B batch)</p> 
  <!--<h1>yes<?php echo $ip ?></h1>-->
</div>
<form action="adminupdatedb.php" method="post" > 
<div style="padding-left:10px; padding-right:10px">
<div class="container">
  <div class="row">
  
    <div class="col-sm-4 col-8" style="padding-left:100px;">
      <input type="radio" class="form-check-input" name="optradio" required="required" value="1"><h3>Yes</h3>
      
	  
    </div>
    <div class="col-sm-4 col-8" style="padding-left:100px;">
      <input type="radio" class="form-check-input" name="optradio" required="required" value="2"><h3>No</h3>

    </div>
    <div class="col-sm-4 col-12" style="padding-left:100px;">
      <input type="radio" class="form-check-input" name="optradio" required="required" value="3"><h3>Not Sure</h3>        

    </div>
     <div class="col-sm-4 col-4" style="padding-left:30%; height:80px;">
		<input type="submit" class="btn-success btn-block form-check-input btn-lg" value="vote"></br></br>
		
	</div>
	<!---<div class="col-sm-12">
    <h5>* If you have already voted then see <a href="adminpollresult.php">Result</a>  </h5>
    <h5>* Once you voted your vote will not be recounted</h5>
    </div>--->
	<!--<div class="col-sm-12 col-12"><a href="createyourpoll.html">Create your own poll</a></div>-->
	
  </div>
  <!-- Message-->
  
    
<!--end message-->
	
</div>

</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3><a href="adminpollresult.php">See Result</a></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
	<div class="col-sm-4">
      <h3><a href="createyourpoll.html">Create your own poll</a></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3><a href="#">Manage Poll</a></h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>
<div class="jumbotron text-center">
  <h5>Contact Us: --------</h5> 
  <h5>About Us: ---------</h5> 
</div>
</form>

</body>
</html>
