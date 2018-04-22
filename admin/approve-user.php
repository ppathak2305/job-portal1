<?php
 session_start();
if(empty($_SESSION['id_admin'])){
    header("Location: index_admin.php");
    exit();
}
 require_once("db.php");

if(isset($_GET)){
    $sql = "UPDATE users SET activation='1' WHERE id='$_GET[id]'";
    if($connect->query($sql)){
        header("Location: candidate-request.php");
        exit();
    }
    else{
        echo "Error";
    }
}

