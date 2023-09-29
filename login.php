<?php
include_once("./db.php");

$username = $password = "";


if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username = mysqli_real_escape_string($data, $_POST['username']);
	$password = mysqli_real_escape_string($data, $_POST['password']);
  

	$sql="select * from users where username='".$username."' AND passcode='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$username;

		header("location:user_dashboard.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:admin_dashboard.php");
	} else {
        echo "username or password incorrect";
    }
}
?>