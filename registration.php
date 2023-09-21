<?php
include('dbcon.php');
if (isset($_REQUEST["rsignup"]))
{
  if(($_REQUEST["rname"]=="") ||($_REQUEST["rcollage"]=="") || ($_REQUEST["remail"]=="") || ($_REQUEST["rnumber"]==""))
  {
    $msg="All field are require";
  }
  else
  {
    $rpassword=trim($_REQUEST['rpassword']);
    $rpassword1=trim($_REQUEST['rpassword1']);
      if(!empty($rpassword))
      {
          if($rpassword!==$rpassword1)
          {
            $msg="your two password did not match";
          }
          else
          {
            $sql="select email from user where email='".$_REQUEST['remail']."'";
            $result=$conn->query($sql);
              if ($result->num_rows==1)
              {
                $msg="Account already exist";
              }
              else
              {
                  $rname=$_REQUEST['rname'];
                  $rgender=$_REQUEST['rgender'];
                  $rcollage=$_REQUEST['rcollage'];
                  $remail=$_REQUEST['remail'];
                  $rnumber=$_REQUEST['rnumber'];
                  $rpassword=$_REQUEST['rpassword'];
                  $sql="insert into user(name,gender,collage,email,mob,password) VALUES
                   ('$rname','$rgender','$rcollage','$remail','$rnumber','$rpassword')";
                   if($conn->query($sql) == TRUE)
                   {
                   $msg="Account created successfully";
                   }
                   else{
                     $msg="Unable to create account";
                   }
              }

          }
      }
      else{
        $msg="password field is empty";
        }
  }
  
}
?>

<div class="container mb-4" id="registration">
      <h2 class="text-center" style="color: white; font-weight: bold;">Create an account</h2>
      <div class="row">
        <div class="col-md-6 col-sm-6 offset-md-3 text-white" style="background-color: rgba(0, 0, 0, 0.6);">
          <form action="" method="POST" class="p-3" id="myForm">
            <div class="form-group my-1">
              <i class="fas fa-user mr-2"></i><label for="name" class="font-weight-bold">Name</label>
              <input type="text" class="form-control" placeholder="Name" name="rname">
            </div>
            <div class="form-group my-1">
              <i class="fas fa-user mr-2"></i><label for="gender" class="font-weight-bold">Gender</label>
              <select name="rgender" id="rgender" class="form-control">
                <option>Select your gender</option>
                <option value="Male">Male</option>
                <option value="female">female</option>
              </select>
            </div>
            <div class="form-group my-1">
              <i class="fas fa-school mr-2"></i><label for="clg-name" class="font-weight-bold">College Name</label>
              <input type="text" name="rcollage" placeholder="Enter your college name" class="form-control">
            </div>
            <div class="form-group my-1">
                <label for="email" class="font-weight-bold">Email</label>
              <input type="text" name="remail" class="form-control" placeholder="Enter your Email">
            </div>
            <div class="form-group my-1"> 
              <i class="fas fa-phone mr-2"></i><label for="mobile-number" class="font-weight-bold">mobile-number</label>
              <input type="tel" name="rnumber" class="form-control" placeholder="Enter your Mobile Number">
            </div>
            <div class="form-group my-1"> 
              <i class="fas fa-key mr-2"></i><label for="password" class="font-weight-bold">password</label>
              <input type="password" name="rpassword" class="form-control" placeholder="Enter your password">
            </div>
            <div class="form-group my-1"> 
              <i class="fas fa-key mr-2"></i><label for="password" class="font-weight-bold">confirm-password</label>
              <input type="password" name="rpassword1" class="form-control" placeholder="Enter your confirm password">
            </div>
            <div class="submit" style="display: flex;">
            <button class="btn btn-danger mt-2 p-1 font-weight-bold mr-4" name="rsignup" >Submit</button>
            <p class="alert p-0 my-2 font-weight-bold"><?php if(isset($msg)) echo $msg ?></p>
            </div>

          </form>
        </div>
      </div>
    </div>