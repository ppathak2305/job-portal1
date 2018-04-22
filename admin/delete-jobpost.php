<?php
 session_start();
if(empty($_SESSION['id_admin'])){
    header("Location: index_admin.php");
    exit();
}
 require_once("db.php");

if(isset($_GET)){
    $sql = "DELETE FROM jobposts WHERE id_jobpost='$_GET[id]'";
    if($connect->query($sql)){
        $sql1 = "DELETE FROM apply_job_post WHERE id_jobpost='$_GET[id]'";
        if($connect->query($sql1)){}
        header("Location: job-posts.php");
        exit();
    }
    else{
        echo "Error";
    }
}

?>