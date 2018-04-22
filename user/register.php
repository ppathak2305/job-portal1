<?php
    session_start();
    if(isset($_SESSION['userid'])){
        header("Location: dashboard.php");
        exit();
    }
?>
<!DOCTYPE html>
<!--
Template Name: Yoffa
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Pages | Register</title>
<script type="text/javascript">
    function checkform(){
      var pass1 = document.getElementById("pass1").value;
      var pass2 = document.getElementById("pass2").value;
      if(pass1 != pass2){
        document.getElementById("pass2error").innerHTML="Password Donot Match" ;
      }
      else{
          document.getElementById("pass2error").innerHTML="" ;
    }
      }
</script>>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
</head>
<style>
    #head{
        font-size: 32px;
        font-family: "Georgia"
    }
</style>
<body id="top" background = "../images/demo/backgrounds/6.jpg" style=" background-size: 100%">
<!-- Top Background Image Wrapper -->
    
<nav class="navbar navbar-inverse" id="insidenav">
  <div class="container-fluid">
    <div class="navbar-header">
         <h1><a class="navbar-brand" href="../index_dbms.php" id="head">Job Portal</a>
        </h1>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li ><a href="../index_dbms.php"> Home </a></li>
        <li class="active"><a href="#"> Sign Up </a></li>
<li ><a href="login1.php"> Login </a></li>
<li ><a href="../company/company_register.php"> Company </a></li>
      </ul>
  </div>
</nav>
        <div class="container" >

    <form class="well form-horizontal" action="addusr.php" method="post"  id="contact_form" >
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="first_name" name="first_name" placeholder="First Name" class="form-control"  type="text" required="">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="last_name" name="last_name" placeholder="Last Name" class="form-control"  type="text" required="">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="user_name" name="user_name" placeholder="Username" class="form-control"  type="text" required="">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="password" name="password" placeholder="Password" class="form-control"  type="password" required="">
    </div>
    <label class="error" id="pass1error"></label>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="confirm_password" name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password" required="">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input id="email" name="email" placeholder="E-Mail Address" class="form-control"  type="text" required="">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input id="contact_no" name="contact_no" placeholder="(639)" class="form-control" type="text" required="">
    </div>
  </div>
</div>

<!-- Select Basic -->
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" onclick="checkform()">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
<?php
  
  ?>
</fieldset>
</form>
    </div><!-- /.container -->
</body>
</html>