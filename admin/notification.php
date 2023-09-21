<?php
define('TITLE','notification.php');
define('page','notification.php');
include_once('../dbcon.php');
session_start();
include('includes/header.php');
if(!isset($_SESSION['radmin']))
{
    header("location:adminlogin.php");
}
if(isset($_REQUEST['submit']))
{
    if(($_REQUEST["notification_title"]=="") || ($_REQUEST["details"]==""))
  {
    $msg="All field are require";
  }
  else
  {
   $notification_title=$_REQUEST['notification_title'];
   $details=$_REQUEST['details'];
   $name=$_REQUEST['name'];
  $sql="insert into notifications values ('','$notification_title','$details','$name',now())";
    if($conn->query($sql) == TRUE)
    {
    $msg="notification created successfully";
    }
    else{
        $msg="Unable to create notification";
        }
  }
}
?>

</script>
<div class="offset-md-1 offset-sm-2 col-sm-6 col-md-7" id="gob">
    <div class="col-md-7 col-sm-6 offset-md-3 text-white" style="background-color: rgba(0, 0, 0, 0.2); padding-top: 5px;">
    <h2 class="text-center mt-3" style="color: white; font-weight: bold;">Enter new notifications</h2>
    <form action="" method="POST" class="p-3" id="myForm">
        <div class="form-group">
            <label for="notification_title" class="font-weight-bold">Title</label>
            <input type="text" placeholder="Enter notification Title" class="form-control" name="notification_title" require>
        </div>
        <div class="form-group">
            <label for="details" class="font-weight-bold">Notice</label>
            <textarea name="details" rows="5" class="form-control" placeholder="Enter notification details" require></textarea>
        </div>
        <div class="form-group">
            <i class="fas fa-user mr-2"></i><label for="name" class="font-weight-bold">Posted by</label>
            <input type="text" class="form-control" placeholder="Enter faculty name" name="name" require>
        </div>
        <button type="submit" class="btn btn-danger mt-2 p-1 font-weight-bold mr-4" name="submit" style="color: white;">Submit</button>
        <p class="alert"><?php if(isset($msg)) echo $msg ?></p>
    </form></div>
</div>
<?php
include('includes/footer.php');
?>
