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
<title>Pages | Search Jobs</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" media="all"> 
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>         
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>  
</head>
    <body>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>         
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>  
        
    <nav class="navbar navbar-inverse" id="insidenav">
  <div class="container-fluid">
    <div class="navbar-header">
         <h1><a class="navbar-brand" href="../index_dbms.php" id="head" style="font-size:32px; font-family: Georgia ; margin-top:2px;">Job Portal</a>
        </h1>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a  href="index_dbms.php">Home</a></li>
        <li class="active"><a href="#"> Search </a></li>
<li><a  href="user/login1.php">Login</a>
        
      </li>
      </ul>
  </div>
</nav>
    <br>
<div class="content-wrapper" style="margin-left: 0px;">
    <section class="content-header bg-main" style="background:#C0C0C0">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center index-head">
            <h1 id="demo1">All <strong>JOBS</strong> In One Place</h1>
            <p>One search, global reach</p>
            <p><a class="btn btn-success btn-lg" href="#" role="button">Search Jobs</a></p>
          </div>
        </div>
      </div>
    </section>
    <p id="demo"></p>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form id="myForm" class="form-inline">
                        <div class="form-group">
                            <label>Experience</label>
                            <select id="experience" class="form-control">
                            <option value="" selected="">Select Experience</option>
                            <?php
                                $sql ="SELECT DISTINCT(experience) FROM jobposts WHERE experience IS NOT NULL";
                            $result = $connect->query($sql);
                            if($result->num_rows > 0){
                             while($row = $result->fetch_assoc()) {
                              echo "<option value'".$row['experience']."'>".$row['experience']." </option>";
                               }
                             }
                                ?>
                            </select>
                
                        </div>
                        <div class="form-group" style="margin-left:200px;">
                            <label>Qualification</label>
                            <select id="qualification" class="form-control">
                            <option value="" selected="">Select Qualification</option>
                            <?php
                                $sql ="SELECT DISTINCT(qualification) FROM jobposts WHERE qualification IS NOT NULL";
                            $result = $connect->query($sql);
                            if($result->num_rows > 0){
                             while($row = $result->fetch_assoc()) {
                              echo "<option value'".$row['qualification']."'>".$row['qualification']."                                         </option>";
                               }
                             }
                                ?>
                            </select>
                
                        </div>
                        <button class="btn btn-success" style="margin-left:300px;">Search</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="table-responsive" id="tableContainer">
                <table id="example" class=" display  table table-striped table-bordered" >
                    <thead>
                        <th>Job Name </th>
                        <th>Job Description</th>
                        <th>Minimum Salary</th>
                        <th>Maximum Salary</th>
                        <th>Experience</th>
                        <th>Qualification</th>
                    </thead>
                    <tbody> 
                    <?php
                   /*    $sql="SELECT * from jobposts";
                        if(!empty($_GET['experience'])){
                            $sql= $sql . "WHERE experience ='$_GET[experience]'";
                        }
                        if(!empty($_GET['experience']) && !empty($_GET['qualification'])){
                            $sql= $sql . "AND qualification ='$_GET[qualification]'";
                        }
                        else if(!empty($_GET['qualification'])){
                            $sql= $sql . "WHERE qualification ='$_GET[qualification]'";
                        }
                        $result= $connect->query($sql);
                        if($result->num_rows>0){
                            while($row = $result->fetch_assoc()){
                                
                        
                        ?> 
                    <tr>
                        <td><?php echo $row['jobtitle']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['minsalary']; ?></td>
                        <td><?php echo $row['maxsalary']; ?></td>
                        <td><?php echo $row['experience']; ?></td>
                        <td><?php echo $row['qualification']; ?></td>
                     </tr>
                        <?php
                          }  
                        }
                        $connect->close(); */
                        ?> 
                </tbody>
               </table>
              </div>
            </div>
        </div>
    </section>
    </div>
        <script type="text/javascript">
        $(function() {        
        var oTable = $('#example').DataTable({
          "autoWidth": false,
          "ajax" : {
            "url" : "refresh_job_search.php",
            "dataSrc" : "",
          "data" : function (d) {
              d.experience = $("#experience").val();
              d.qualification = $("#qualification").val();
            }
              
          }
        });

        $("#myForm").on("submit", function(e) {
          e.preventDefault();
          oTable.ajax.reload( null, false);
        })

        } );
      
    </script>
         </body>
</html>