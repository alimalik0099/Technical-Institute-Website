<?php
$timezone = "Asia/Karachi";
date_default_timezone_set($timezone);
$conn = mysqli_connect("localhost", "root", "","cmit");


if(mysqli_connect_errno()) {
	echo "Failed to connect: " . mysqli_connect_errno();
}
else
{

}
?>