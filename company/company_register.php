<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Step by step tab style form validation Wizard using Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <style type="text/css">
body {
	margin-top:40px;
     font-family: montserrat, arial, verdana;
    background-image: url("../images/demo/backgrounds/6.jpg"); background-size: 100%;
}
        
/*form styles*/
#msform {
    text-align: center;
    position: relative;
    margin-top: 30px;
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
    padding: 20px 30px;
    box-sizing: border-box;
    width: 80%;
    margin: 0 10%;

    /*stacking fieldsets above each other*/
    position: relative;
}

.stepwizard-step p {
	margin-top: 10px;
}
.stepwizard-row {
	display: table-row;
    color: white;
    
}
.stepwizard {
	display: table;
	width: 50%;
	position: relative;
}
.stepwizard-step button[disabled] {
	opacity: 1 !important;
	filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
	top: 14px;
	bottom: 0;
	position: absolute;
	content: " ";
	width: 100%;
	height: 1px;
	background-color: #ccc;
	z-order: 0;
}
.stepwizard-step {
	display: table-cell;
	text-align: center;
	position: relative;
}
.btn-circle {
	width: 30px;
	height: 30px;
	text-align: center;
	padding: 6px 0;
	font-size: 12px;
	line-height: 1.428571429;
	border-radius: 15px;
}
</style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </head>
    
    
    <body>
      <nav class="navbar navbar-inverse" id="insidenav">
  <div class="container-fluid">
    <div class="navbar-header">
         <h1><a class="navbar-brand" href="../index_dbms.php" id="head" style="font-size: 28px; font-family: Georgia">Job Portal</a>
        </h1>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li ><a href="../index_dbms.php"> Home </a></li>
        <li ><a href="login.php"> Login </a></li>
        <li class="active"><a href="#"> Sign Up </a></li>
        <li ><a href="../user/register.php"> Applicant </a></li>
      </ul>
  </div>
</nav>

<div class="container">
    <div class="col-md-6 col-md-offset-3">
      <div class="stepwizard col-md-offset-3" id="msform">
    <div class="stepwizard-row setup-panel">
          <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>  Personal  </p>
      </div>
          <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Company</p>
      </div>
          <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Submission</p>
      </div>
        </div>
  </div>
      <form role="form" action="addcompany.php" method="post">
    <div class="row setup-content" id="step-1" style="background:#fff;">
        <fieldset>
          <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
              <h3> Step 1</h3>
              <div class="form-group">
            <label class="control-label">First Name</label>
            <input  maxlength="100" type="text" name="firstname" required="required" class="form-control" placeholder="Enter First Name"  />
          </div>
            <br>
              <div class="form-group">
            <label class="control-label">Last Name</label>
            <input maxlength="100" type="text" name="lastname" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
            <br>
              <div class="form-group">
            <label class="control-label">Contact number</label>
            <input type="text" required="required" name="contact_no" class="form-control" placeholder="Enter your address" >
                  <br>
          </div>
              <div class="form-group">
            <label class="control-label">Email address</label>
            <input type="text" required="required" name="email" class="form-control" placeholder="Enter your address" >
                  <br>
          </div>
              <div class="form-group">
            <label class="control-label">Password</label>
            <input type="Password" required="required" name="password" class="form-control" placeholder="Enter your address" >
                  <br>
          </div>
              <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            <br>
            <div><label>________________________________</label></div>
            </div>
      </div>
            </fieldset>
        </div>
    <div class="row setup-content" id="step-2"  style="background:#fff;">
        <fieldset>
          <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
              <h3> Step 2</h3>
              <div class="form-group">
            <label class="control-label">Company Name</label>
            <input maxlength="200" type="text" name="companyname" required="required" class="form-control" placeholder="Enter Company Name" />
          </div>
            <br>
              <div class="form-group">
            <label class="control-label">Company Address</label>
            <input maxlength="300" type="textarea" name="address" required="required" class="form-control" placeholder="Enter Company Address"  />
          </div>
            <br>
            <div class="form-group">
            <label class="control-label">Company Website</label>
            <input maxlength="200" type="text" name="companysite" required="required" class="form-control" placeholder="Enter Company's Official site link" />
          </div>
            <br>
            <div class="form-group">
                          <label style="margin-left:12px; "><font size="2" color="#2F4F4F">Your job function*</font></label>
                             <div class="dropdown">
                          <!--   <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">-->
                            <select class="selectpicker" style="width:250px; height: 32px" id="jobfunction" name="jobfunction">Please choose...
                                <span class="caret"></span><!--</button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">HTML</a></li>
                                  <li><a href="#">CSS</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                </ul>-->
                                <option id="1">Business Owner</option>
                                <option id="2">Hiring Manager</option>
                                <option id="3">Corporate or In-House Recruiter / HR</option>
                              </select>
                              </div>
                            </div>
            <br>
            <div class="form-group">
                          <label style="margin-left:12px; "><font size="2" color="#2F4F4F">Company size*</font></label>
                            <div class="dropdown">
                          <!--   <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">-->
                            <select class="selectpicker" style="width:250px; height: 32px" id="csize" name="csize">Please choose...
                                <span class="caret"></span><!--</button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">HTML</a></li>
                                  <li><a href="#">CSS</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                </ul>-->
                                <option value="1-10">1-10</option>
                                <option value="10-50">10-50</option>
                                <option value="50-100">50-100</option>
                                <option value="100-250">100-250</option>
                                <option value="250-500">250-500</option>
                                <option value="500+">500+</option>

                              </select>
                              </div>
                            </div>
            <br>
                <div class="form-group">
                          <label style="margin-left:12px; "><font size="2" color="#2F4F4F">Your industry focus on*</font></label>
                            <div class="dropdown">
                          <!--   <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">-->
                            <select class="selectpicker" style="width:250px; height: 32px" id="csize" name="ctype">Please choose...
                                <span class="caret"></span>
                                
                                <option id="1">Accounting</option>
                                <option id="2">Administrative</option>
                                <option id="3">Advertising/ Marketing</option>
                                <option id="4">Agriculture</option>
                                <option id="5">Analyst</option>
                                <option id="6">Analytics</option>
                                <option id="7">Architecture</option>
                                <option id="8">Arts/Creative</option>
                                <option id="9">Banking</option>
                                <option id="10">Business Development</option>
                                <option id="11">Construction</option>
                                <option id="12">Consulting</option>
                                <option id="13">Customer Service</option>
                                <option id="14">Distribution</option>
                                <option id="15">Education</option>
                                <option id="16">Engineering</option>
                                <option id="17">Environmental</option>
                                <option id="18">Events</option>
                                <option id="19">Executive</option>
                                <option id="20">Finance</option>
                                <option id="21">General Business</option>
                                <option id="23">General Labor</option>
                                <option id="24">Government Administration</option>
                                <option id="25">Healthcare</option>
                                <option id="26">Hospitality</option>
                                <option id="27">Human Resources</option>
                                <option id="28">Information Technology</option>
                                <option id="29">Insurance</option>
                                <option id="30">Logistics</option>
                                <option id="31">Manufacturing</option>
                                <option id="32">Marketing</option>
                                <option id="33">Production</option>
                                <option id="34">Printing</option>
                                <option id="35">Publishing</option>
                                <option id="36">Real Estate</option>
                                <option id="37">Religious</option>
                                <option id="38">Research</option>
                                <option id="39">Restuarants</option>
                                <option id="40">Retail</option>
                                <option id="41">Safety/Security</option>
                                <option id="42">Social Services</option>
                                <option id="43">Telecommunications</option>
                                <option id="44">Textiles</option>
                                <option id="45">Trade</option>
                                <option id="46">Transportations</option>
                                <option id="47">Travel/Tourism</option>
                                <option id="48">Utilities/Waste Management</option>
                              </select>
                              </div>
                            </div>
            <br>
              <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            <div><label>________________________________</label></div>
            </div>
      </div>
            </fieldset>
        </div>
    <div class="row setup-content" id="step-3"  style="background:#fff; height:430px;">
        <fieldset>
          <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
              <h3> Step 3</h3>
              <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
            </div>
      </div>
            </fieldset>
        </div>
  </form>
    </div>


<script type="text/javascript">
  $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
		  allWells = $('.setup-content'),
		  allNextBtn = $('.nextBtn');
  allWells.hide();
  navListItems.click(function (e) {
	  e.preventDefault();
	  var $target = $($(this).attr('href')),
			  $item = $(this);
	  if (!$item.hasClass('disabled')) {
		  navListItems.removeClass('btn-primary').addClass('btn-default');
		  $item.addClass('btn-primary');
		  allWells.hide();
		  $target.show();
		  $target.find('input:eq(0)').focus();
	  }
  });
  allNextBtn.click(function(){
	  var curStep = $(this).closest(".setup-content"),
		  curStepBtn = curStep.attr("id"),
		  nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
		  curInputs = curStep.find("input[type='text'],input[type='url'],textarea[textarea]"),
		  isValid = true;
	  $(".form-group").removeClass("has-error");
	  for(var i=0; i<curInputs.length; i++){
		  if (!curInputs[i].validity.valid){
			  isValid = false;
			  $(curInputs[i]).closest(".form-group").addClass("has-error");
		  }
	  }
	  if (isValid)
		  nextStepWizard.removeAttr('disabled').trigger('click');
  });
  $('div.setup-panel div a.btn-primary').trigger('click');
});
  </script>
</div>
</body>
</html>