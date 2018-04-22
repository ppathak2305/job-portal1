<?php
session_start();
if(empty($_SESSION['userid'])) {
	header("Location: ../index_dbms.php");
	exit();
}
require_once("db.php");
if(isset($_POST)) {
	$upload = true;
	$folder_dir = "../uploads/resume/";
	$base = basename($_FILES['resume']['name']); 
	$fileType = pathinfo($base, PATHINFO_EXTENSION); 
	$file = uniqid() . "." . $fileType;   
	$filename = $folder_dir .$file; 
	if(file_exists($_FILES['resume']['tmp_name'])) 
	{ 
		if($fileType == "pdf")  {
			if($_FILES['resume']['size'] < 1000000) { 
				move_uploaded_file($_FILES["resume"]["tmp_name"], $filename);
			} else 
			{
				$_SESSION['uploadError'] = "Wrong size,maximum size allowed is 10 MB";
				$upload = false;
			}
		} else 
		{
			$_SESSION['uploadError'] = "Wrong format,only PDF allowed";
			$upload = false;
		}
	} 
	else 
		{
			$_SESSION['uploadError'] = "Something went wrong. Try again.";
			$upload = false;
		}
	if($upload == false) {
		header("Location: resume_upload.php");
		exit();
	}
	$sql = "SELECT * FROM users WHERE id='$_SESSION[userid]'";
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		if($row['resume'] != "") {
			unlink("../uploads/resume/".$row['resume']);
		}
	}
	$sql = "UPDATE users set resume='$file' WHERE id='$_SESSION[userid]'";
	if($conn->query($sql)) {
		header("Location: resume.php");
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}