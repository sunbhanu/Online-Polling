<?php
$ip=$_SERVER['REMOTE_ADDR'];

$ans=$_POST['optradio'];

$con=mysqli_connect('localhost','database_username','password','database_name');
//if($ans!=1||$ans!=2||$ans!=3)
//{
//    header('Location: index.php');
//}

$q="INSERT INTO `adminpoll` (`id`, `ans`) VALUES ('$ip', $ans)";
$i=mysqli_query($con,$q);
//echo $i;
mysqli_close($con);
header('Location: adminpollresult.php');
?>
