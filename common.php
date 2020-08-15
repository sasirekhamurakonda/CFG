<?php
$con = mysqli_connect("localhost", "root", "", "admin")or die($mysqli_error($con));
if(!isset($_SESSION))
{
	session_start();
}
?>