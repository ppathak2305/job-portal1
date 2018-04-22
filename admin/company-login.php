<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Pages | Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
</head>
<style>
    body{background: #eee url(../images/demo/backgrounds/job-sites.png);}
    html,body{
        position: relative;
        height: 100%;
    }

    .login-container{
        position: relative;
        width: 300px;
        margin: 80px auto;
        padding: 20px 40px 40px;
        text-align: center;
        background: #fff;
        border: 1px solid #ccc;
    }

    #output{
        position: absolute;
        width: 300px;
        top: -75px;
        left: 0;
        color: #fff;
    }

    #output.alert-success{
        background: rgb(25, 204, 25);
    }

    #output.alert-danger{
        background: rgb(228, 105, 105);
    }


    .login-container::before,.login-container::after{
        content: "";
        position: absolute;
        width: 100%;height: 100%;
        top: 3.5px;left: 0;
        background: #fff;
        z-index: -1;
        -webkit-transform: rotateZ(4deg);
        -moz-transform: rotateZ(4deg);
        -ms-transform: rotateZ(4deg);
        border: 1px solid #ccc;

    }

    .login-container::after{
        top: 5px;
        z-index: -2;
        -webkit-transform: rotateZ(-2deg);
         -moz-transform: rotateZ(-2deg);
          -ms-transform: rotateZ(-2deg);

    }

    .avatar{
        width: 100px;height: 100px;
        margin: 10px auto 30px;
        border-radius: 100%;
        border: 2px solid #aaa;
        background-size: cover;
    }

    .form-box input{
        width: 100%;
        padding: 10px;
        text-align: center;
        height:40px;
        border: 1px solid #ccc;;
        background: #fafafa;
        transition:0.2s ease-in-out;

    }

    .form-box input:focus{
        outline: 0;
        background: #eee;
    }

    .form-box input[type="text"]{
        border-radius: 5px 5px 0 0;
        text-transform: lowercase;
    }

    .form-box input[type="password"]{
        border-radius: 0 0 5px 5px;
        border-top: 0;
    }

    .form-box button.login{
        margin-top:15px;
        padding: 10px 20px;
    }

    .animated {
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInUp {
      0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        transform: translateY(20px);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        -ms-transform: translateY(20px);
        transform: translateY(20px);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
      }
    }

    .fadeInUp {
      -webkit-animation-name: fadeInUp;
      animation-name: fadeInUp;
    }
        
</style>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body>
    <nav class="navbar navbar-inverse" id="insidenav" style="height: 82px">
  <div class="container-fluid">
    <div class="navbar-header">
         <h1><a class="navbar-brand" href="index_dbms.php" id="head" style="font-size: 32px ; font-family: Georgia;">Job Portal</a>
        </h1>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="test2.php"> Sign Up </a></li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <span class="glyphicon glyphicon-user"></span> Login <span class="caret"></span></a>
        
      </li>
      </ul>
  </div>
</nav>
<div class="container">
	<div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form action="companylogincheck.php" method="post">
                    <input name="name1" type="text" placeholder="username">
                    <input type="password" placeholder="password" name="pass">
                    <button class="btn btn-info btn-block login" type="submit">Login</button>
                
                <?php
                if(isset($_SESSION['registerCompleted'])) {
                    ?>
                <div>
                    <p class="text-center">You have registered successfully ! Your account approval is pending by admin</p>
                </div>
                <?php
                    unset($_SESSION['registerCompleted']); }
                    ?>
                <?php
              //If Company Failed To log in then show error message.
              if(isset($_SESSION['loginError'])) {
                ?>
                <div>
                  <p class="text-center">Invalid Email/Password! Try Again!</p>
                </div>
              <?php
               unset($_SESSION['loginError']); }
              ?>   
              <?php 
              if(isset($_SESSION['companyLoginError'])) {
                ?>
                <div>
                  <p class="text-center"><?php echo $_SESSION['companyLoginError'] ?></p>
                </div>
              <?php
               unset($_SESSION['companyLoginError']); }
              ?>  
                    </form>
            </div>
        </div>
        
</div>
</body>
</html>