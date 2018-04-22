<?php
    session_start();
    //$_SESSION['id']=true;
    if(empty($_SESSION['id'])){
        header("Location: company_dashboard.php");
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
<body id="top" background = "../images/demo/backgrounds/6.jpg">
<!-- Top Background Image Wrapper -->
    
<nav class="navbar navbar-inverse" id="insidenav">
  <div class="container-fluid">
    <div class="navbar-header">
         <h1><a class="navbar-brand" href="../index_dbms.php" id="head">Job Portal</a>
        </h1>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li ><a href="company_dashboard.php"> Home </a></li>
        <li ><a href="profile.php"> Profile </a></li>
<li ><a href="logout.php"> Logout </a></li>

      </ul>
  </div>
</nav>
        <div class="container" >

    <form class="well form-horizontal" action="addjob.php" method="post"  id="contact_form" >
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Create Job Post</b></h2></center></legend><br>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Job Title</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="jobtitle" name="jobtitle" placeholder="Job Title" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Job Description</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="description" name="description" placeholder="Job Description" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Minimum Salary</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="minsalary" name="minsalary" placeholder="Minimum Salary" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Maximum Salary</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="maxsalary" name="maxsalary" placeholder="Maximum Salary" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Experience Required</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="experience" name="experience" placeholder="Experience Required" class="form-control"  type="text">
    </div>
    <label class="error" id="pass1error"></label>
  </div>
</div>


<!-- Text input-->

       <div class="form-group">
  <label class="col-md-4 control-label">Qualification</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input id="qualification" name="qualification" placeholder="Qualification Required" class="form-control"  type="text">
    </div>
  </div>
</div>



<!-- Select Basic -->
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
<?php
  
  ?>
</fieldset>
</form>
    </div><!-- /.container -->
</body>
</html>