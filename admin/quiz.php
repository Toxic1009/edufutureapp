<?php
ob_start();
define('TITLE','quiz.php');
define('page','quiz.php');
include_once('../dbcon.php');
session_start();
include('includes/header.php');
if(!isset($_SESSION['radmin']))
{
    header("location:adminlogin.php");
}

if(isset($_REQUEST['submit']))
{
$title=$_REQUEST['Title'];
$total=$_REQUEST['question'];
$_SESSION['qns']=$total;
$correct=$_REQUEST['correct'];
$_SESSION['right']=$correct;
$wrong=$_REQUEST['wrong'];
$_SESSION['mistake']=$wrong;
$time=$_REQUEST['time'];
$eid=uniqid();
$_SESSION['eid']=$eid;
if($title=='' || $time=='')
{
    $msg="all field are require";
}
else{
$sql="insert into quiz values ('$eid ','$title','$total','$correct','$wrong','$time',now())";
if($conn->query($sql) == TRUE)
                   {
                   $msg="done successfully";
                   header("location:addquestion.php");
                   }
                   else{
                     $msg="Unable to insertion";
                   }
     }
}
ob_end_flush();
?>

</script>
<div class="offset-md-1 offset-sm-2 col-sm-6 col-md-7" id="gob">
    <h2 class="text-center mr-5 pr-5" style="color: white; font-weight: bold;">Enter quiz detail</h2>
    <form action="" method="POST" class="text-center" id="myForm">
        <div class="form-group">
            <input type="text" placeholder="Enter quiz Title" class="form-control" name="Title" require>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Enter number of Question" name="question" require>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Enter mark on right" name="correct" require>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="marks on wrong without sign" name="wrong" require>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Enter time limit" name="time"><br>
        </div>
        <button type="submit" class="btn btn-light" name="submit" style="color: black;">submit</button>
        <p class="alert"><?php if(isset($msg)) echo $msg ?></p>
    </form>
</div>
<?php
include('includes/footer.php');
?>
