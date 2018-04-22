<?php
session_start();


require_once("db.php");
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
<title>Profile</title>
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
         <h1><a class="navbar-brand" href="#" id="head">Job Portal</a>
        </h1>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="company_dashboard.php"> Home </a></li>
      <li ><a href="#" class="active"> Profile </a></li>
        <li><a href="logout.php"> Logout </a></li>
      </ul>
  </div>
</nav>
        <div class="container" >

    <form class="well form-horizontal" action="updateprofile.php" method="post"  id="contact_form" >
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Profile</b></h2></center></legend><br>
<!-- Text input-->

<?php
 $sql = "SELECT * FROM company_details WHERE id_company='$_SESSION[id]'";
 $result = $connect->query($sql);
 if($result->num_rows >0){
  while($row=$result->fetch_assoc())
  {

 ?>
 <div class="form-group">
  <label class="col-md-4 control-label">Company Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="company_name" name="company_name" placeholder="Company Name" value="<?php echo $row['companyname']; ?>" class="form-control"  type="text" readonly>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="first_name" name="first_name" placeholder="First Name" value="<?php echo $row['firstname']; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="last_name" name="last_name" placeholder="Last Name" value="<?php echo $row['lastname']; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Job Function</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="jobfunction" name="jobfunction" placeholder="Username" value="<?php echo $row['job_function']; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<!--<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="password" name="password" placeholder="Password" class="form-control"  type="password">
    </div>
    <label class="error" id="pass1error"></label>
  </div>
</div>
-->
<!-- Text input-->
<!--
<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="confirm_password" name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
    </div>
    
  </div>
</div>
-->

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input id="email" name="email" placeholder="E-Mail Address" value="<?php echo $row['email']; ?>" class="form-control"  type="text" readonly>
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input id="contact_no" name="contact_no" placeholder="(639)" value="<?php echo $row['contact_no']; ?>" class="form-control" type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input id="address" name="address" placeholder="Address" class="form-control" value="<?php echo $row['address']; ?>"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Size</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
  <input id="address" name="size" placeholder="City" class="form-control" value="<?php echo $row['size']; ?>"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Company Type</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
  <input id="address" name="company_type" placeholder="State" class="form-control" value="<?php echo $row['company_type']; ?>" type="text" readonly>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Website</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
  <input id="address" name="website" placeholder="Qualification" class="form-control" value="<?php echo $row['website']; ?>" type="text">
    </div>
  </div>
</div>



<!-- Select Basic -->
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" onclick="checkform()">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUPDATE <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
<?php
  
  ?>
</fieldset>
</form>
<?php
}
}
?>
    </div><!-- /.container -->
</body>
</html>