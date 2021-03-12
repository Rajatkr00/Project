<?php
$con = mysqli_connect('localhost','root');

if ($con) {
	echo "Connection Success";

}
else{
	echo "No Connection";
}
mysqli_select_db($con, 'project');


$user=$_POST['user'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$comment=$_POST['comment'];

$query = "insert into minor(user,email,contact,comment) values ('$user','$email','$contact','$comment')";

echo "$query";
mysqli_query($con,$query);

header('location:home.php');
?>