<?php
 session_start();
if(empty($_SESSION['id_admin'])){
    header("Location: index_admin.php");
    exit();
}
 require_once("db.php");

if(isset($_GET)){
    $sql = "UPDATE company_details SET activation='1' WHERE id_company='$_GET[id]'";
    if($connect->query($sql)){
        header("Location: admin_dashboard.php");
        exit();
    }
    else{
        echo "Error";
    }
}

