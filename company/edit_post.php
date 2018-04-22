<?php
    session_start();
    $_SESSION['id']=true;
    if(empty($_SESSION['id'])){
        header("Location: company_dashboard.php");
        exit();
    }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";

//Create connection
$connect = new mysqli($servername , $username , $password , $dbname );

if($connect->connect_error){
    die("Connection Failed: " . $connect->connect_error);
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
      <li ><a href="../index_dbms.php"> Home </a></li>
        <li class="active"><a href="#"> Sign Up </a></li>
<li ><a href="login1.php"> Login </a></li>
<li ><a href="company.php"> Company </a></li>
      </ul>
  </div>
</nav>
        <div class="container" >

    <form class="well form-horizontal" action="edit.php" method="post"  id="contact_form" >
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Create Job Post</b></h2></center></legend><br>
<!-- Text input-->

      <?php
       $sql="SELECT * FROM jobposts WHERE id_company='$_SESSION[id]' AND id_jobpost='$_GET[id]'";
                      $result=$connect->query($sql);

                      if($result->num_rows >0){
                      while($row=$result->fetch_assoc())
                      {
      ?>


<div class="form-group">
  <label class="col-md-4 control-label">Job Title</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="jobtitle" name="jobtitle" placeholder="Job Title" value="<?php echo $row['jobtitle']; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Job Description</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="description" name="description" placeholder="Job Description" value="<?php echo $row['description']; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Minimum Salary</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="minsalary" name="minsalary" placeholder="Minimum Salary" value="<?php echo $row['minsalary']; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Maximum Salary</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="maxsalary" name="maxsalary" placeholder="Maximum Salary" value="<?php echo $row['maxsalary']; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Experience Required</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="experience" name="experience" placeholder="Experience Required" value="<?php echo $row['experience']; ?>" class="form-control"  type="text">
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
  <input id="qualification" name="qualification" placeholder="Qualification Required" value="<?php echo $row['qualification']; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>


<input type="hidden" name="target_id" value="<?php echo $_GET['id']; ?>">
<!-- Select Basic -->
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUPDATE <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
<?php
  }
}else header("Location: company_dashboard.php");

  ?>
</fieldset>
</form>
    </div><!-- /.container -->
</body>
</html>