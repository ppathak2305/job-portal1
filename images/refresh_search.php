
<?php
   session_start();
    //require_once("db.php");
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";

//Create connection
$connect = new mysqli($servername , $username , $password , $dbname );

if($connect->connect_error){
    die("Connection Failed: " . $connect->connect_error);
}
    $sql="SELECT * from jobposts";
    
     if(!empty($_GET['experience'])) {
     	$sql = $sql . " WHERE experience='$_GET[experience]'";
     }
     
     if(!empty($_GET['qualification']) && !empty($_GET['experience'])) {
     	$sql = $sql . " AND qualification='$_GET[qualification]'";
     } else if(!empty($_GET['qualification'])) {
     	$sql = $sql . " WHERE qualification='$_GET[qualification]'";
     }
    $result= $connect->query($sql);
    $json= [];
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()) {
		 $json[] = [
			0 => $row['jobtitle'],
			1 => $row['description'],
			2 => $row['minsalary'],
			3 => $row['maxsalary'],
			4 => $row['experience'],
			5 => $row['qualification'],
			];
	}

	echo json_encode($json);
    }
    

?>
