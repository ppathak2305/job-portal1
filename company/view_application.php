<?php
session_start();
require_once("db.php");
if(empty($_SESSION['id'])){
    header("Location: ../index_dbms.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Job Portal</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--NAVIGATION BAR-->
    <header>
      <nav class="navbar navbar-default">
      <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Job Portal</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="profile.php">Profile</a></li>
        <li ><a href="logout.php">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    </header>
    <div class="container">
      <div class="row">
        <div class="panel panel-info">
          <div class="panel-heading">
            User Application
          </div>
          <div class="panel-body">
            <?php
             $sql="SELECT * FROM applied_jobs INNER JOIN users ON applied_jobs.id_user=users.id WHERE users.id='$_GET[id]' AND applied_jobs.id_jobpost='$_GET[id_jobpost]'";
            $result=$connect->query($sql);
            if($result->num_rows > 0)
            {
              while($row= $result->fetch_assoc()){
                ?>
                <p>Name: <?php echo $row['fname'] . " " . $row['lname']; ?></p>
                <p>Email: <?php echo $row['email']; ?></p>
                <p>Phone Number: <?php echo $row['contact']; ?></p>
                <p>Address: <?php echo $row['address']; ?></p>
                <p>City: <?php echo $row['city']; ?></p>
                <p>State: <?php echo $row['state']; ?></p>
                <p>Qualification: <?php echo $row['qualification']; ?></p>
                <p>Stream: <?php echo $row['stream']; ?></p>
                <p>Date of Birth: <?php echo $row['dob']; ?></p>
                <p>Designation: <?php echo $row['designation']; ?></p>

                <?php 
                if(isset($row['resume'])) {
                 ?>
                 <a href="../uploads/resume/<?php echo $row['resume']; ?>" class="btn btn-success" download="<?php echo $row['fname'] . "resume"; ?>" >Download Resume</a>
                 <?php
                }
                ?>

                <a href="approve_user.php?id_user=<?php echo $_GET['id']; ?>&id_jobpost=<?php echo $row['id_jobpost']; ?>" class="btn btn-success">Approve Application</a>
                <a href="reject_user.php?id_user=<?php echo $_GET['id']; ?>&id_jobpost=<?php echo $row['id_jobpost']; ?>" class="btn btn-danger">Reject Application</a>

                <?php } } ?>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>