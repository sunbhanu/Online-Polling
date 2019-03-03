<?php
$tablename=$_GET['poll'];
//echo $tablename;
$ip=$_SERVER['REMOTE_ADDR'];

$con=mysqli_connect('localhost','database_username','password','database_name');

$q="SELECT `question` FROM `yourpoll` WHERE pollid='$tablename'";
$re=mysqli_query($con,$q);
$qu = mysqli_fetch_array($re);
//echo $tablename;
$q="SELECT ans FROM `$tablename` WHERE id='$ip'";
$reans=mysqli_query($con,$q);
$i = mysqli_fetch_array($reans);
//echo $i[0];
mysqli_close($con);

//header("Location: yourpollresult.php/?tablename=$tablename" );

if($i[0]==1||$i[0]==2||$i[0]==3){
header("Location: yourpollresult.php/?tablename=$tablename" );}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Poll</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1><?php echo $qu[0] ?> ?</h1>
  <!--<p>(FGIET Computer Science 3rd year B batch)</p> -->
</div>
<form action="yourupdatedb.php" method="post" > 
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
		<input type="submit" class="btn-success btn-block form-check-input btn-lg" value="Vote"></br></br>
		
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
      <h3><a href="yourpollresult.php/?tablename=<?php echo $tablename;?>">See Result</a></h3>
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
<input type="hidden" name="tablename" value="<?php echo $tablename ?>" />
</form>

</body>
</html>
