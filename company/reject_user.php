<?php
session_start();
require_once("db.php");
$sql="UPDATE applied_jobs SET status='1' WHERE id_jobpost='$_GET[id_jobpost]' AND id_user='$_GET[id_user]'";
$result=$connect->query($sql);
if($result === TRUE)
{
	header("Location: job_applications.php");
	exit();
}
else
	echo "Error!";

$connect->close();
?>