<?php
session_start();
if(empty($_SESSION['id'])){
    header("Location: ../index_dbms.php");
    exit();}
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database1";

    //Create connection
    $conn = new mysqli($servername , $username , $password , $dbname );

    if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
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
       <div class="col-md-12">
         <div class="table-responsive">
          <h2 class="text-center">Job Vacancies</h2>
           <table class="table table-striped">
            <thead>
             <th>Job Name</th>
             <th>Job Description</th>
             <th>Minimum Salary</th>
             <th>Maximum Salary</th>
             <th>Experience</th>
             <th>Qualification</th>
             <th>Created At</th>
             <th>Action</th>
           </thead>
           <tbody>
             <?php
                $sql="SELECT * FROM jobposts WHERE id_company='$_SESSION[id]'";
                $result=$conn->query($sql);

                if($result->num_rows >0){
                while($row=$result->fetch_assoc())
                {
                  ?>
                  <tr>
                    <td><?php echo $row['jobtitle']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['minsalary']; ?></td>
                    <td><?php echo $row['maxsalary']; ?></td>
                    <td><?php echo $row['experience']; ?></td>
                    <td><?php echo $row['qualification']; ?></td>
                    <td><?php echo $row['createdat']; ?></td>
                    <td><a href="edit_post.php?id=<?php echo $row['id_jobpost']; ?>">Edit</a><a href="delete_post.php?id=<?php echo $row['id_jobpost']; ?>">Delete</a></td>
                  </tr>
                  <?php
                  }
                }
                $conn->close();
             ?>
           </tbody>
         </table>
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