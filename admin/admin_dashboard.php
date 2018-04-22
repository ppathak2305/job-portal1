<?php

session_start();

if(empty($_SESSION['id_admin'])) {
  header("Location: index_admin.php");
  exit();
}

require_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Job Portal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <link rel="stylesheet" href="../css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="../css/custom.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<style>
    body{
        background-image: url("../images/demo/backgrounds/6.jpg");
        background-size:cover;
            background-repeat: no-repeat;
        color: #ffff;
    }
    #sidepanel{
        font-family: fantasy;
        font-weight: 300;
        text-align: center;
        vertical-align: middle;
        font-size: 20px;
    }
    #corc{
        font-family: Poppins-Bold;
        font-weight: bold;
        font-size: 16px;
    }
    </style>
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini" >
<nav class="navbar navbar-inverse" id="insidenav">
  <div class="container-fluid">
    <div class="navbar-header">
         <h1><a class="navbar-brand" href="../index_dbms1.php" id="head" style="font-size:32px; font-family: Georgia;">Job Portal</a>
        </h1>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li ><a href="logout.php"> Logout </a></li>
      </ul>
  </div>
</nav>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-3" id="sidepanel">
            <br><br><br><br><br><br>
            <div class="list-group">
                <a href="admin_dashboard.php" class="list-group-item active"><br>Dashboard<br></a>
                <a href="user.php" class="list-group-item "><br>Users<br></a>
                <a href="company.php" class="list-group-item "><br>Company<br></a>
                <a href="job-posts.php" class="list-group-item "><br>Job Posts<br></a>
            </div>
        </div>
        <div class="col-md-8">
        <h1 style="text-align: center; font-family:Poppins-Bold;">&nbsp;&nbsp;&nbsp;&nbsp;Welcome To Dashboard , Admin !</h1>
        <br><br>
            <ul class="nav nav-tabs" id="corc">
          <li class="active"><a href="#">Company Requests</a></li>
          <li><a href="candidate-request.php">Candidate Requests</a></li>
        </ul>
            <br>
        <?php
                $sql ="SELECT * FROM company_details where activation='2'";
                $result= $connect->query($sql);
                if($result->num_rows>0){
                    echo '<h4> Total Pending Accounts : '. $result->num_rows . '<h4>';
                }
            ?>
            <br>
        <table class="table" style="font-size:18px; font-family:Poppins-Medium;">
            <thead>
                <th>S no.</th>
            <th>Company Name</th>
            <th>Company Type</th>
            <th>Head Office</th>
            <th>Website</th>
            <th>Contact</th>
            <th>Action</th>
            </thead>
            <tbody>
            <?php
                $sql ="SELECT * FROM company_details where activation='2'";
                $result= $connect->query($sql);
                if($result->num_rows>0){
                    $i =1;
                    while($row = $result->fetch_assoc()){
                        ?>
                <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['companyname']; ?></td>
                <td><?php echo $row['company_type']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['website']; ?></td>
                <td><?php echo $row['contact_no']; ?></td>
                    <td><a href="reject-company.php?id=<?php echo $row['id_company']; ?>">Reject</a>
                &nbsp;&nbsp;/&nbsp;<a href="approve-company.php?id=<?php echo $row['id_company']; ?>">Approve</a>
                    </td>
                </tr>
                <?php
                    }
                }
                
            ?>
            </tbody>
            </table>
        </div>
        </div>
    </div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.min.js"></script>
</body>
</html>
