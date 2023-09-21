<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../image/10.png" type="image/png" >
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/design.css">
    <title>Profile</title>
    <style>
     .active {
         color: #3a3a5c;
         background-color:rgba(0, 0, 0, 0.6); ;
     }
    
        @media only screen and (min-width: 1080px){
   body{
    background-image: url("../image/web.jpg");
   }
    }
/*tablet view styling*/
    @media only screen and (max-width: 1080px){ 
      body{
    background-image: url("../image/tab2.jpg");
   }
    }
@media only screen and (max-width: 400px){
    body{
    background-image: url("../image/phone3.jpg");
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
                <a href="../index.php" class="nav-item nav-link "  style="color: white;">Home</a>
                <a href="../developer.html" class="nav-item nav-link"  style="color: white;">Developer</a>
                <a href="../aboutus.html" class="nav-item nav-link"  style="color: white;">About Us</a>
                <a href="../feedback.php" class="nav-item nav-link " tabindex="-1"  style="color: white;">Feedback</a>
            </div>
        </div>
    </nav>
    <script>
    function toggleMenu() {
      var menuBox = document.getElementById('menu');    
      if(menuBox.style.display == "block") { // if is menuBox displayed, hide it
        menuBox.style.display = "none";
      }
      else { // if is menuBox hidden, display it
        menuBox.style.display = "block";
      }
    }
    </script>
    
    
<!--start side-bar-->
    <div class="container-fluid " style="margin-top: 40px; ">
        <button class="btn mb-2" id="menubutton" onclick="toggleMenu()">Menu</button>
        <div class="row">
            <nav class="col-sm-3 col-md-2 menu " id="menu" style="color: white; display: block">
                <div class="left-sidebar">
                    <ul class="nav flex-column" >
                        <li class="nav-item" style="margin-top: 40px; "> 
                            <a style="color: white" class="nav-link <?php if (page=='showquiz') { echo 'active';} ?>" href="showquiz.php"><i class="fas fa-home mr-2"></i>Home</a></li>
                        <li class="nav-item"> 
                            <a style="color: white" class="nav-link <?php if(page == 'rank.php') { echo 'active'; } ?>" href="rank.php"><i class="fas fa-star mr-2"></i>Ranking</a></li>
                        <li class="nav-item"> 
                            <a style="color: white" class="nav-link <?php if(page == 'profile.php') { echo 'active'; } ?>" href="profile.php"><i class="fas fa-user mr-2"></i>Profile</a></li>
                        <li class="nav-item"> 
                            <a style="color: white" class="nav-link <?php if(page == 'history.php') { echo 'active'; } ?>" href="history.php"><i class="fas fa-history mr-2"></i>History</a></li>  
                        <li class="nav-item"> 
                            <a style="color: white" class="nav-link <?php if(page == 'unotification.php') { echo 'active'; } ?>" href="unotification.php"><i class="fas fa-inbox mr-2"></i>Notice Board</a></li> 
                        <li class="nav-item"> 
                            <a style="color: white" class="nav-link <?php if(page == 'umeeting.php') { echo 'active'; } ?>" href="umeeting.php"><i class="fas fa-video mr-2"></i>Meetings</a></li>   
                        <li class="nav-item"> <a style="color: white" class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a></li>
                    </ul>
                </div>
            </nav>
<!--        </div>
    </div>     -->        
<!--end side-bar-->
