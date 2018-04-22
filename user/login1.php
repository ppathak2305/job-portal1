<?php
    session_start();
    if(isset($_SESSION['userid'])){
        header("Location: dashboard.php");
        exit();
    }
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
    body{background: #eee url(../images/demo/backgrounds/6.jpg); background-size: 100%;}
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
<!--<script>
    $(function(){
var textfield = $("input[name=user]");
            $('button[type="submit"]').click(function(e) {
                e.preventDefault();
                //little validation just to check username
                if (textfield.val() != "") {
                    //$("body").scrollTo("#output");
                    $("#output").addClass("alert alert-success animated fadeInUp").html("Welcome back " + "<span style='text-transform:uppercase'>" + textfield.val() + "</span>");
                    $("#output").removeClass(' alert-danger');
                    $("input").css({
                    "height":"0",
                    "padding":"0",
                    "margin":"0",
                    "opacity":"0"
                    });
                    //change button text 
                    $('button[type="submit"]').html("continue")
                    .removeClass("btn-info")
                    .addClass("btn-default").click(function(){
                    $("input").css({
                    "height":"auto",
                    "padding":"10px",
                    "opacity":"1"
                    }).val("");
                    });
                    
                    //show avatar
                    $(".avatar").css({
                        "background-image": "url('../images/demo/backgrounds/job_portal.jpg')"
                    });
                } else {
                    //remove success mesage replaced with error message
                    $("#output").removeClass(' alert alert-success');
                    $("#output").addClass("alert alert-danger animated fadeInUp").html("sorry enter a username ");
                }
                //console.log(textfield.val());

            });
});

</script> -->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body>
    <nav class="navbar navbar-inverse" id="insidenav">
  <div class="container-fluid">
    <div class="navbar-header">
         <h1><a class="navbar-brand" href="../index_dbms.php" id="head" style="font-size: 28px; font-family: Georgia">Job Portal</a>
        </h1>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li ><a href="../index_dbms.php"> Home </a></li>
        <li ><a href="register.php"> Sign Up </a></li>
<li class="active"><a href="#"> Login </a></li>
<li ><a href="../company/company_register.php"> Company </a></li>
      </ul>
  </div>
</nav>
<div class="container">
	<div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form action="logincheck.php" method="post">
                    <input name="name1" type="text" placeholder="username">
                    <input type="password" placeholder="password" name="pass">
                    <button class="btn btn-info btn-block login" type="submit">Login</button>
                
                <?php
                if(isset($_SESSION['registerCompleted'])) {
                    ?>
                <div>
                    <p class="text-center">You have registered successfully !</p>
                </div>
                <?php
                    unset($_SESSION['registerCompleted']); }
                    ?>
                    <?php
                if(isset($_SESSION['loginFailed'])) {
                    ?>
                <div>
                    <p class="text-center">Invalid Username or Password! Please try again!</p>
                </div>
                <?php
                    unset($_SESSION['loginFailed']); }
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