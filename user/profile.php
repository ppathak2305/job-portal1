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
      <li><a href="dashboard.php"> Home </a></li>
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
 $sql = "SELECT * FROM users WHERE id='$_SESSION[userid]'";
 $result = $conn->query($sql);
 if($result->num_rows >0){
  while($row=$result->fetch_assoc())
  {

 ?>

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="first_name" name="first_name" placeholder="First Name" value="<?php echo $row['fname']; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="last_name" name="last_name" placeholder="Last Name" value="<?php echo $row['lname']; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="user_name" name="user_name" placeholder="Username" value="<?php echo $row['username']; ?>" class="form-control"  type="text" readonly>
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
  <input id="email" name="email" placeholder="E-Mail Address" value="<?php echo $row['email']; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input id="contact_no" name="contact_no" placeholder="(639)" value="<?php echo $row['contact']; ?>" class="form-control" type="text">
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
  <label class="col-md-4 control-label">City</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
  <input id="address" name="city" placeholder="City" class="form-control" value="<?php echo $row['city']; ?>"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">State</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
  <input id="address" name="state" placeholder="State" class="form-control" value="<?php echo $row['state']; ?>" type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Qualification</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
  <input id="address" name="qualification" placeholder="Qualification" class="form-control" value="<?php echo $row['qualification']; ?>" type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Stream</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
  <input id="address" name="stream" placeholder="Stream" class="form-control" value="<?php echo $row['stream']; ?>" type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Date of Birth</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input id="address" name="dob" placeholder="Date of Birth" class="form-control" value="<?php echo $row['dob']; ?>" type="date">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Designation</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
  <input id="address" name="designation" placeholder="Designation" class="form-control" value="<?php echo $row['designation']; ?>" type="text">
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