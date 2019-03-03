<!DOCTYPE html>
<html lang="en">
   <?php
        
        $tablename=$_GET['tablename'];
        $con=mysqli_connect('localhost','database_username','password','database_name');
        
        //for question
        $q="SELECT `question` FROM `yourpoll` WHERE pollid='$tablename'";
        $re=mysqli_query($con,$q);
        $qu = mysqli_fetch_array($re);
        
        //for number of yes
        $q="SELECT COUNT(*) FROM `$tablename` WHERE ans=1";
        $res = mysqli_query($con,$q);
        $yes = mysqli_fetch_array($res);
        
        //for number of no
        $q="SELECT COUNT(*) FROM `$tablename` WHERE ans=2";
        $res = mysqli_query($con,$q);
        $no = mysqli_fetch_array($res);
        
        //for number of confused
        $q="SELECT COUNT(*) FROM `$tablename` WHERE ans=3";
        $res = mysqli_query($con,$q);
        $confused = mysqli_fetch_array($res);
        
        mysqli_close($con); 
        
        //echo $yes[0];
        //echo $no[0];
        //echo $confused[0];
        
        //  % calculation
        $total=$yes[0]+$no[0]+$confused[0];
        $totalvote=$total;
        if($total==0)
        {
            $total=1;
        }
        $ha=($yes[0]*100)/$total;
        $nhi=($no[0]*100)/$total;
        $patanhi=($confused[0]*100)/$total;
        
        //round upto 2 decimal point
        $ha=round($ha,2);
        $nhi=round($nhi,2);
        $patanhi=round($patanhi,2);
    ?> 
    
<head>
  <title>Poll Result</title>
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
  <p>(FGIET Computer Science 3rd year B batch)</p> 
</div>

<div class="container">
  <div class="row">
  
    <div class="col-sm-3 col-12">
		<div class="progress " style="height:40px">
			<div class="progress-bar" style="width:<?php echo $ha ?>%;height:40px"><?php echo $ha ?>%</div>
		</div>
		<!--<div class="col-sm-6 col-6"><h4>yes</h4></div>-->
      
	  
    </div>
	<div class="col-sm-1 col-12"> <h5>Yes</h5></div>
    <div class="col-sm-3 col-12">
		<div class="progress" style="height:40px">
			<div class="progress-bar" style="width:<?php echo $nhi ?>%;height:40px"><?php echo $nhi ?>%</div>
		</div>
      
	  
    </div>
	<div class="col-sm-1 col-12"><h5>No</h5></div>
    <div class="col-sm-3 col-12">
		<div class="progress" style="height:40px">
			<div class="progress-bar" style="width:<?php echo $patanhi ?>%;height:40px"><?php echo $patanhi ?>%</div>
		</div>
      
	  
    </div>
	<div class="col-sm-1 col-12"><h5>Not Sure</h5></div>
	<div class="col-sm-12 col-12"><h5>Total vote :- <?php echo $totalvote ;?></h5></div>
	
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
</body>
</html>
