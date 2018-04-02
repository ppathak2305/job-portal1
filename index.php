<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Job Portal</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--NAVIGATION BAR-->
    <header>
      <nav class="navbar navbar-default">
      <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Job Portal</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="company.php">Company</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    </header>

 <!--CENTRAL THEME-->

    <section>
<hr class="my-4">
          <div class="col-md-12">
            <div class="jumbotron text-center">
              <h1 class="display-4">Job Portal</h1>
              <p class="lead ">Find your dream job.</p>
              <hr class="my-4">
              <p>Just in a few steps.</p>
              <p class="lead">
                <a class="btn btn-primary btn-lg" href="register.php" role="button">Get Started</a>
              </p>
            </div>
          </div>
<hr class="my-4">
    </section>

    
<!--CARAOUSEL-->
    <section>
      <div class="container ">
      <div id="demo" class="carousel slide" data-ride="carousel">

       
        <ol class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ol>

       
        <div class="carousel-inner">
          <div class="item active">
            <img src="lake.jpg" alt="Chicago" style="width: 100%; max-height=400px;">
          </div>
          <div class="item">
            <img src="lake.jpg" alt="Chicago" style="width: 100%; max-height=400px;">
          </div>
          <div class="item">
            <img src="lake.jpg" alt="New York" style="width: 100%; max-height=400px;">
          </div>
        </div>

        
        <a class="left carousel-control" href="#demo" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#demo" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
</div>
</div>
<hr class="my-4">
    </section>

  

    <!--LATEST JOB POSTS-->

    <section>
      <div class="container">
        <div class="text-center">
          <h2>Latest Job Posts</h2>
        </div>
        <hr class="my-4">
        <div class="row">
          <div class="col-md-6">
           <h5>Title 1</h5>
            <p>Hi!...this is job 1. we are here to hire you.</p>
            <div class="text-center">
            <button class="btn btn-default">View</button>
          </div>
          </div>
          <div class="col-md-6">
           <h5>Title 2</h5>
            <p>Hi!...this is job 2. we are here to hire you.</p>
            <div class="text-center">
            <button class="btn btn-default">View</button>
          </div>
          </div>
        </div>
         <div class="row">
          <div class="col-md-6">
           <h5>Title 3</h5>
            <p>Hi!...this is job 3. we are here to hire you.</p>
            <div class="text-center">
            <button class="btn btn-default">View</button>
          </div>
          </div>
          <div class="col-md-6">
           <h5>Title 4</h5>
            <p>Hi!...this is job 4. we are here to hire you.</p>
            <div class="text-center">
            <button class="btn btn-default">View</button>
          </div>
          </div>
        </div>
      </div> 
<hr class="my-4">
    </section>

    <!--COMPANIES LIST-->

    <section>
      <div class="col-md-12">
      <div class="jumbotron">
      <div class="container">
        <div class="text-center">
        <h2>Companies List</h2>
      </div>
        <div class="row text-center ">
          
          <div class="col-md-3 border">
            <a href="#" class="thumbnail">
             <img src="logo1.jpg"  alt="1"></a>
          </div>
          <div class="col-md-3 border">
            <a href="#" class="thumbnail">
             <img src="logo2.jpg"  alt="2"></a>
          </div>
          <div class="col-md-3 border">
            <a href="#" class="thumbnail">
             <img src="logo3.jpg"  alt="3"></a>
          </div>
          <div class="col-md-3 border">
            <a href="#" class="thumbnail ">
             <img src="logo4.jpg" alt="4"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="my-4">
    </section>

    <!--CREATORS-->

    <section>
      <div class="container text-center">
         <h2 class="text-center">CREATORS</h2>
          <hr class="my-4">
        <div class="row">
          <div class="col-md-3">
            <div class="border text-center">
              <img src="princy.jpg"  alt="princy" style="height: 180px; width: 180px; border-radius: 90px">
            </div>
            <h4 class="text-center">Princy Pathak</h4>
            <hr class="my-4">
            <p class="text-center">a brief information about the creators of this project. it is as follows. this is about princy pathak.</p>
          </div>
          <div class="col-md-3">
            <div class="border text-center">
              <img src="..." alt="...">
            </div>
            <h4>Swapnil Yadav</h4>
            <hr class="my-4">
            <p class="text-center">a brief information about the creators of this project. it is as follows. this is about swapnil yadav.</p>
          </div>
          <div class="col-md-3">
            <div class="border text-center">
              <img src="..." alt="...">
            </div>
            <h4>Ayushi Jaiswal</h4>
            <hr class="my-4">
            <p class="text-center">a brief information about the creators of this project. it is as follows. this is about ayushi jaiswal.</p>
          </div>
          <div class="col-md-3">
            <div class="border text-center">
              <img src="..." alt="...">
            </div>
            <h4>Sakshi Shrivas</h4>
            <hr class="my-4">
            <p class="text-center">a brief information about the creators of this project. it is as follows. this is about sakshi shrivas.</p>
          </div>
        </div>
      </div>
    </section>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>