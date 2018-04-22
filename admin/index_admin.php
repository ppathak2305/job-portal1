<?php

session_start();

if(isset($_SESSION['id_admin'])) {
  header("Location: dashboard.php");
  exit();
}

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
  <!-- iCheck -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <style>
    body {
  padding-top: 40px;
  padding-bottom: 40px;
  background: url("../images/demo/backgrounds/4.jpg");
        background-size:100% 100%;
            background-repeat: no-repeat;
}
    #inputPassword{
    background: url("../images/demo/backgrounds/unlock.png") no-repeat scroll 7px 7px;
    padding-left:35px;        
        }
    #inputEmail{
    background: url("../images/demo/backgrounds/usr.png") no-repeat scroll 7px 7px;
    padding-left:35px;        
        }
 #login-form{
    border-radius: 10px;  
     background:#ffff;
        }
  #submit-button{
     background: url("../images/demo/backgrounds/grad1.jpg") no-repeat scroll 0 0 transparent;
      display: block;
  position: relative;
    font-family: Poppins-Medium;
   font-size: 20px;
    color: #fff;
    border-radius: 25px;
        }
.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin-heading{
 display: block;
  font-family: Poppins-Bold;
    font-weight: 600;
  font-size: 39px;
  color: #333333;
  line-height: 1.2;
  text-align: center;
        }
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0.5;
  border-bottom-left-radius: 0.5;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0.5;
  border-top-right-radius: 0.5;
}
  #insidenav{
  position:fixed;
    top:0;
    width:100%;
    z-index:100;          
    }
    </style>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<nav class="navbar navbar-inverse" id="insidenav">
  <div class="container-fluid">
    <div class="navbar-header">
         <h1><a class="navbar-brand" href="index_dbms.php" id="head"  style="font-size:32px;
             font-family:Georgia;">Job Portal</a>
        </h1>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <!--<li ><a type="disabled"> Sign Up </a></li>-->
<li class="dropdown active"><a class="dropdown-toggle" href="#" data-toggle="dropdown">
    <span class="glyphicon glyphicon-user"></span> Login <span class="caret"></span></a>
        
      </li>
      </ul>
  </div>
</nav>
    <br><br><br><br><br><br>
    <div class="container" >
        <div class="col-md-6 col-md-offset-3" id="login-form">
    <form action="checklogin.php" method="post" class="form-signin">
        <br>
      <h2 class="form-signin-heading">Login</h2>
        <br><br>
        <label for="inputEmail" style="font-color:#000000;">Username</label>
        <div class="input-group col-md-12">
        <input id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>
        </div>
        <br><br>
        <label for="inputPassword">Password</label>
        <div class="input-group col-md-12">
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        </div>
        <br><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit-button" >Sign in</button>
        <br><br><br><br><br>
        <div>
            <label></label>
        </div>
      <?php 
//If User Failed To log in then show error message.
if(isset($_SESSION['loginError'])) {
  ?>
  <div>
    <p class="text-center">Invalid Username/Password! Try Again!</p>
  </div>
<?php
 unset($_SESSION['loginError']); }
?>

    </form>
    </div>
  </div>
  <!-- /.login-box-body -->
<!-- /.login-box -->


<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.min.js"></script>
<!-- iCheck -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

</body>
</html>
