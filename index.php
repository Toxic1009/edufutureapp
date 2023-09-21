<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="shortcut icon" href="image/10.png" type="image/png" >
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    .bs-example{
        margin: 22px;
    }
  </style>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/design.css">
    <title>EDU-FUTURE</title>
</head>
<body>
    <div class="bs-example">
    <nav class="navbar navbar-expand-md sticky-top" style="background-color: rgba(0, 0, 0, 0.6);" >
        <a href="#" class="navbar-brand" style="color: white; font-weight: bold; font-size: 25px;">EDU-FUTURE</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" style="background-color: #F1F0FF; border-radius: 10px; height: 30px;">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <a href="" class="closebtn" onclick="closeNav" style="color:rgba(0, 0, 0, 0);">X</a>
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link active"  style="color: white;">Home</a>
                <a href="developer.html" class="nav-item nav-link"  style="color: white;">Developer</a>
                <a href="aboutus.html" class="nav-item nav-link"  style="color: white;">About Us</a>
                <a href="feedback.php" class="nav-item nav-link active" tabindex="-1"  style="color: white;">Feedback</a>
            </div>
        </div>
    </nav>

    <header class="jumbotron back-image">
      <div class="heading">
       <!--  <h2 class="text-light font-weight-bold text-uppercase mb-5" style="padding-top: 80px;">Welcome to EDU-FUTURE</h2> -->
        <a href="#registration" class="btn btn-light btnn">sign up</a>
        <a href="user/login.php" class="btn btn-light btnn">login</a>
     </div>
    </header>
    <!--registration section  start-->
    <?php  include('registration.php'); ?>
     <!--registration section  end-->

    <!--footer section-->
    <div class="container-fluid">
      <footer class="row text-white" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="col-sm-4 py-3">
          <span class="mr-5 text-center font-weight-bold">follow us:</span>
          <a href="#" target="_blank"><i class="fab fa-facebook-f fa-2x"></i></a>
          <a href="#" target="_blank"><i class="fab fa-linkedin fa-2x ml-2 text-secondary clr"></i></a>
          <a href="#" target="_blank"><i class="fab fa-instagram fa-2x ml-2 text-danger clr"></i></a>
          
        </div> <!--end first column-->
        <div class="col-sm-8 text-right my-3">
          <!-- <small class="text-uppercase font-weight-bold mr-3">design by &copy</small> -->
          <small class="ml-2"><a class="btn btn-light" href="admin/adminlogin.php">admin login</a></small>
        </div>
      </footer>
    </div>
    
    <!--End footer section-->
  
     <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>