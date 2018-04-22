<?php
session_start();
require_once("db.php");
if(isset($_POST)){
    	$firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
        $username = mysqli_real_escape_string($connect, $_POST['email']);
        $address = mysqli_real_escape_string($connect, $_POST['address']);
        $site = mysqli_real_escape_string($connect, $_POST['companysite']);
        $contact = mysqli_real_escape_string($connect, $_POST['contact_no']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $jobfunction = mysqli_real_escape_string($connect, $_POST['jobfunction']);
        $companyname = mysqli_real_escape_string($connect, $_POST['companyname']);
        $csize = mysqli_real_escape_string($connect, $_POST['csize']);
        $company_type = mysqli_real_escape_string($connect, $_POST['ctype']);
    /**    $country = mysqli_real_escape_string($connect, $_POST['country']);
        $state = mysqli_real_escape_string($connect, $_POST['state']);
        $city = mysqli_real_escape_string($connect, $_POST['city']);
        $speciality = mysqli_real_escape_string($connect, $_POST['framework2']);  **/
        echo "string" . $jobfunction;
    $sql = "INSERT into company_details(companyname, firstname, lastname ,contact_no ,address, size , email ,password, website , job_function,company_type ) values ('$companyname','$firstname' , '$lastname' ,'$contact' , '$address' , '$size' ,'$username' ,'$password', '$site' , '$jobfunction' , '$company_type' )";

        if($connect->query($sql) == TRUE){
             $_SESSION['registerCompleted'] = true;
            // echo "done";
             header("Location: login.php");
             exit();
        }
        else{
            echo "Error " . $sql . "<br>" . $connect->error;
        }
 }
   
else{
    header("location: company_register.php");
    exit();
}