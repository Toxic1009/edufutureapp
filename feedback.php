<?php
include_once('dbcon.php');
if(isset($_REQUEST['confirm']))
{
    if(($_REQUEST["subject"]=="") || ($_REQUEST["email"]==""))
  {
    $msg="All field are require";
  }
  else
  {
   $name=$_REQUEST['rname'];
   $email=$_REQUEST['email'];
   $subject=$_REQUEST['subject'];
   $feedback=$_REQUEST['feedback'];
  $sql="insert into feedbacks values ('','$name','$email','$subject','$feedback',now())";
    if($conn->query($sql) == TRUE)
    {
    $msg="feedback submited successfully";
    }
    else{
        $msg="Unable to submit feedback";
        }
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/10.png" type="image/png" >
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/design.css">
    <title>Feedback</title>

    <style>
      @media only screen and (min-width: 1080px){
   .back-image{
    background-image: url("image/feedback.jpg");
   }
   .container{
    margin: 5%;
    padding-top: 5px;
    padding-bottom: 1px;
   }
    }
/*tablet view styling*/
    @media only screen and (max-width: 1080px){ 
      .back-image{
    background-image: url("image/feedbacktab.jpg");
   }
   .container{
    margin-right: 18%;
    margin-top: 12%;
    padding-top: 2px;
    padding-bottom: 1px;
   }
    }
@media only screen and (max-width: 400px){
    .back-image{
    background-image: url("image/feedbackphone.jpg");
   }
   .container{
    margin: 2%;
    align-items: center;
   }
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md sticky-top " style="background-color: rgba(0, 0, 0, 0.6);" >
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
    

     <header class="jumbotron back-image ">
        <div class="container mb-1">
            <div class="row">
              <div class="col-md-7 col-sm-6 offset-md-3 text-white" style="background-color: rgba(0, 0, 0, 0.2);">
                  <h2 class="text-center mt-3" style="color: white; font-weight: bold;">Feedback/Report a problem</h2>
                <form action="" method="POST" class="p-3" id="myForm">
                  <div class="form-group my-1">
                    <i class="fas fa-user mr-2"></i><label for="name" class="font-weight-bold">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="rname">
                  </div>
                  <div class="form-group my-1"> 
                    <label for="subject" class="font-weight-bold">Subject</label>
                    <input type="text" name="subject" class="form-control" placeholder="Enter Subject">
                  </div>
                  <div class="form-group my-1"> 
                    <label for="subject" class="font-weight-bold">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter your Email">
                  </div>
                  <div class="form-group my-1"> 
                    <label for="subject" class="font-weight-bold">Feedback</label>
                    <textarea name="feedback" id="feedback" rows="5" class="form-control" placeholder="Enter your feedback"></textarea>
                  </div>
                  <div class="submit" style="display: flex;">
                  <button class="btn btn-danger mt-2 p-1 font-weight-bold mr-4" name="confirm" >Submit</button>
                  <p class="alert p-0 my-2 font-weight-bold"><?php if(isset($msg)) echo $msg ?></p>
                  </div>
                </form>
            </div>
          </div>
      </div>
     </header>
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
            <!-- <small class="text-uppercase font-weight-bold mr-3">design by  &copy</small> -->
            <small class="ml-2"><a class="btn btn-light" href="admin/adminlogin.php">admin login</a></small>
          </div>
        </footer>
      </div>
      
      <!--End footer section-->

<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>