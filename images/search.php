<!DOCTYPE html>
<?php
session_start();
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
<!--
Template Name: Job Portal
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Job Portal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="topspacer bgded overlay" style="background-image:url('images/demo/backgrounds/2.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index_dbms.php">Job Portal</a></h1>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="index_dbms.php">Home</a></li>
          <?php
          if(isset($_SESSION['userid'])){
          ?>
          <li><a href="user/dashboard.php">Dashboard</li>
          <li><a href="user/logout.php">Logout</li>
          <?php
          } 
          else { 
          ?>
           <li><a class="drop" href="#">user</a>
            <ul>
              <li><a href="user/gallery.html">Gallery</a></li>
              <li><a href="user/full-width.html">Full Width</a></li>
              <li><a href="user/sidebar-left.html">Sidebar Left</a></li>
              <li><a href="user/sidebar-right.html">Sidebar Right</a></li>
              <li><a href="user/basic-grid.html">Basic Grid</a></li>
            </ul>
          </li>
          <li class="active"><a href="search.php">Search Jobs</a></li>
          <li><a href="user/register.php">Sign Up</a></li>
          <li><a href="user/login1.php">Login</a></li>
          <li><a href="company/company_register.php">Company</a></li>
          <?php } ?>
        </ul>
      </nav>
    </header>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <section>
    <div class="container" class="text-center">
      <div class="row">
        <div class="col-md-12">
          <form id="form1" class="form-inline">
            <div class="form-group">
              <label>Experience</label>
                <select id="experience" class="form-control">
                  <option value="" selected="">Select Experience</option>
                  <option value="1 Year"> 1 Year</option>
                  <option value="2 Year"> 2 Year</option>
                  <option value="3 Year"> 3 Year</option>
                  <option value="4 Year"> 4 Year</option>
                  <option value="5 Year"> 5 Year</option>
                </select>
            </div>
            <div class="form-group">
              <label>Qualification</label>
                <select id="qualification" class="form-control">
                  <option value="" selected="">Select Qualification</option>
                  <?php
                  $sql="SELECT DISTINCT (qualification) FROM jobposts WHERE qualification IS NOT NULL";
                  $result=$connect->query($sql);
                  if($result->num_rows>0)
                  {
                    while($row=$result->fetch_assoc())
                    {
                      echo"<option value'".$row['qualification']."'>".$row['qualification']."</option>";
                    }
                  }
                  ?>
                </select>
            </div>
            <button class="btn-btn-success">Submit</button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="table_responsive">
          <table id="table1" class="table">
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
             
           </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(function(){
    var oTable=$('#table1').DataTable({
      "autoWidth" : false,
      "ajax": {
        "url" : "refresh_search.php",
        "dataSrc" : "",
        "data" : function(d){
          d.experience=$("#experience").val();
          d.qualification=$("#qualification").val();
        }
      }
    });
    $("#form1").on("submit",function(e){
      e.preventDefault();
      oTable.ajax.reload(null,false);
    })
  });
</script>
</body>
</html>