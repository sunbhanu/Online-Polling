<?php
$ip=$_SERVER['REMOTE_ADDR'];

//$tablename=$_GET['tablename'];

$ans=$_POST['optradio'];
$tablename=$_POST['tablename'];
$con=mysqli_connect('localhost','database_username','password','database_name');
//if($ans!=1||$ans!=2||$ans!=3)
//{
//    header('Location: index.php');
//}

$q="INSERT INTO `$tablename` (`id`, `ans`) VALUES ('$ip', $ans)";
$i=mysqli_query($con,$q);
//echo $i;
//echo "it is running";
mysqli_close($con);
header("Location: yourpollresult.php/?tablename=$tablename" );
?>
