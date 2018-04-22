<!DOCTYPE html>
<?php
session_start();
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
          <li class="active"><a href="index_dbms.php">Home</a></li>
          <?php
          if(isset($_SESSION['userid'])){
          ?>
          <li><a href="user/dashboard.php">Dashboard</li>
          <li><a href="user/logout.php">Logout</li>
          <?php
          } 
          else { 
          ?>
           
          <li><a href="search.php">Search Job</a></li>
          <li><a href="user/register.php">Applicant</a></li>
          
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
  <div id="pageintro" class="hoc clear">
    <div class="flexslider basicslider"> 
      <!-- ################################################################################################ -->
      <ul class="slides">
        <li>
          <article>
            <p class="heading">Hiring  fast ,  easy  and  effective</p>
            <h2 class="heading">Finding top talent is tough. Why waste time?</h2>
            <p>Reach best candidates quickly with the Job Portal</p>
            <footer><a class="btn" href="company/company_register.php">Get Started</a></footer>
          </article>
        </li>
        <li>
          <article>
            <p class="heading">Your skills are in demand</p>
            <h2 class="heading">Apply to jobs on the go</h2>
            <p>Increase your chances of receiving relevant jobs from recruiters</p>
            <footer><a class="btn" href="user/register.php">Find Jobs</a></footer>
          </article>
        </li>
        <li>
          <article>
            <p class="heading">****************************************</p>
            <h2 class="heading">For Administrators Only</h2>
            <p>Manage job seeker and employer profiles</p>
            <footer><a class="btn" href="admin/index_admin.php">Click Here</a></footer>
          </article>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="introblocks" class="hoc clear">
    <ul class="nospace">
      <!-- ################################################################################################ -->
      <li>
        <div><i class="fa fa-3x fa-clock-o"></i>
          <h4 class="heading">24 Hours support</h4>
          <p>Unlimited Service</p>
        </div>
      </li>
      <li>
        <div><i class="fa fa-3x fa-phone"></i>
          <h4 class="heading">Our call centre</h4>
          <p>(+91) 1234 567890</p>
        </div>
      </li>
      <li>
        <div><i class="fa fa-3x fa-envelope-o"></i>
          <h4 class="heading">Send us a mail</h4>
          <p>support@ourjobportal.com</p>
        </div>
      </li>
      <!-- ################################################################################################ -->
    </ul>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear text-center"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle text-center">
      <h6 class="heading text-center">Our Past Recruiters</h6>
      <p>Some of our famous recruiting companies</p>
    </div>
    <ul class="nospace group intro">
      <li class="one_third first">
        <article><a href="#"><img src="images/demo/logo1.jpg" alt=""></a>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><img src="images/demo/logo2.jpg" alt=""></a>  
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><img src="images/demo/logo4.jpg" alt=""></a>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <article class="hoc container clear cta"> 
    <!-- ################################################################################################ -->
    <div class="three_quarter first">
      <h6 class="nospace">About Our Website</h6>
      <p class="nospace">To get the background functioning of the website, visit this.</p>
    </div>
    <footer class="one_quarter"><a class="btn medium" href="#">About Us &raquo;</a></footer>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section id="latest" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h3 class="heading">Creators</h3>
    </div>
    <ul class="nospace group">
      <li class="one_quarter first">
        <figure><img src="images/demo/princy.jpg" alt="" style="height: 180px; width: 180px; border-radius: 90px;">
          <figcaption>
          	<h6><br>Princy Pathak</h6>
            <p>this is a breif information about one of the creators.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_quarter">
        <figure><img src="images/demo/320x190.png" alt="" style="height: 180px; width: 180px; border-radius: 90px;">
          <figcaption>
            <h6><br>Ayushi Jaiswal</h6>
            <p>this is a breif information about one of the creators.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_quarter">
        <figure><img src="images/demo/320x190.png" alt="" style="height: 180px; width: 180px; border-radius: 90px;">
          <figcaption>
           <h6><br>Swapnil Yadav</h6>
            <p>this is a breif information about one of the creators.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_quarter">
        <figure><img src="images/demo/320x190.png" alt="" style="height: 180px; width: 180px; border-radius: 90px;">
          <figcaption>
            <h6><br>Sakshi Shrivas</h6>
            <p>this is a breif information about one of the creators.</p>
          </figcaption>
        </figure>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
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
</body>
</html>