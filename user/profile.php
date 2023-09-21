<?php
session_start();
define('page','profile.php');
define('TITLE','profile.php');
include('../dbcon.php');
include('includes/header.php');
if(isset($_SESSION['ruser']))
{
$email= $_SESSION['remail'];
}
else
{
    header("location:login.php");
}
if(isset($_REQUEST['update']))
{
    $rname=$_REQUEST['rname'];
    $rgender=$_REQUEST['rgender'];
    $rcollage=$_REQUEST['rcollage'];
    $rnumber=$_REQUEST['rnumber'];
    $rpassword=$_REQUEST['rpassword'];
    $sql="update user set name= '$rname',gender='$rgender',collage='$rcollage',mob='$rnumber',password='$rpassword' where email='$email'";
    if($conn->query($sql) == TRUE)
    {
        $msg="updated successfully";
        
    }
    else{
      $msg="failed to updated";
    }   
}
$sql=mysqli_query($conn,"select * from user where email='$email'");
while($row=mysqli_fetch_array($sql))
{
    $name=$row['name'];
    $gender=$row['gender'];
    $collage=$row['collage'];
    $mobile=$row['mob'];
    $password=$row['password'];
}



?>
<script>
function resetForm() {
    document.getElementById("myForm").reset();
}
</script>
<div class="col-sm-9 col-md-10 " id="gob">

<div class="container mb-4">
      <h2 class="text-center" style="color: white; font-weight-bold">Updated detail</h2>
      <div class="row">
        <div class="col-md-6 col-sm-6 offset-md-3 text-white" style="background-color: rgba(0, 0, 0, 0.6); border-radius: 10px;">
          <form action="" method="POST" class="p-3" id="myForm">
            <div class="form-group my-1">
              <i class="fas fa-user mr-2"></i><label for="name" class="font-weight-bold">Name</label>
              <input type="name" class="form-control" placeholder="Name" name="rname" value="<?php echo $name ?>">
            </div>
            <div class="form-group my-1">
              <i class="fas fa-user mr-2"></i><label for="gender" class="font-weight-bold">Gender</label>
              <input type="text" name="rgender" placeholder="Enter your Gender" class="form-control" value="<?php echo $gender ?>">
            </div>
            <div class="form-group my-1">
              <i class="fas fa-school mr-2"></i><label for="clg-name" class="font-weight-bold">Collage Name</label>
              <input type="text" name="rcollage" placeholder="Enter your collage name" class="form-control" value="<?php echo $collage ?>">
            </div>
            <div class="form-group my-1"> 
              <i class="fas fa-phone mr-2"></i><label for="mobile-number" class="font-weight-bold">mobile-number</label>
              <input type="text" name="rnumber" class="form-control" placeholder="Enter your Mobile Number" value="<?php echo $mobile ?>">
            </div>
            <div class="form-group my-1"> 
              <i class="fas fa-key mr-2"></i><label for="password" class="font-weight-bold">password</label>
              <input type="password" name="rpassword" class="form-control" placeholder="Enter your password" value="<?php echo $password ?>">
            </div>
            <div class="submit" style="display: flex;">
            <button class="btn btn-danger mt-2 p-1 font-weight-bold mr-4" name="update" onclick="resetForm();">update</button>
            <p class="alert p-0 my-2 font-weight-bold"><?php if(isset($msg)) echo $msg ?></p>
            </div>

          </form>
        </div>
      </div>
    </div>
<?php
include('includes/footer.php')
?>