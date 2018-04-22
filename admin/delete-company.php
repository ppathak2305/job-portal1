<?php
 session_start();
if(empty($_SESSION['id_admin'])){
    header("Location: index_admin.php");
    exit();
}
 require_once("db.php");

if(isset($_GET)){
    $sql = "DELETE FROM company_details WHERE id_company='$_GET[id]'";
    if($connect->query($sql)){
        header("Location: company.php");
        exit();
    }
    else{
        echo "Error";
    }
}

?>