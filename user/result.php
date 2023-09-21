<?php
session_start();
define('TITLE','rank.php');
include('includes/header.php');
include('../dbcon.php');
?>
<?php
if(!isset($_SESSION['ruser']))
{
    header("location:login.php");
}
if(isset($_REQUEST['result']))
{   $eid=$_REQUEST['eid'];
    $sq=mysqli_query($conn,"select * from quiz where eid='$eid'");
    $row1=mysqli_fetch_array($sq);
    $correct=$row1['correct'];
    $mistake=$row1['wrong'];
    $n=$_SESSION['total'];
    $sql=mysqli_query($conn,"select * from answer where eid='$eid'");
    $c=2;
    $result=0;
    @$uid=$_POST['uid'];

    if(!empty($uid[$c]))
    {
   $attempt=count($_POST['uid']);
    while($row=mysqli_fetch_array($sql))
    {  
        $uid=$_POST['uid'];
        $ansid=$row['ansid'];
        $match=$ansid==$uid[$c];
        if($match)
        {
            $result++;
        }
        $c++;
    }
    
   }
   @$wrong=$attempt-$result;
   $tscore=$result*$correct-$wrong*$mistake;
    //insertion in history
      $email= $_SESSION['remail'];
      
      $chck="select * from history where email='$email' AND eid='$eid' ";
      $rslt=$conn->query($chck);
      if($rslt->num_rows==0)
      {
       $sql="insert into history values ('','$email','$eid','0','0','0','0',now())";
       mysqli_query($conn,$sql);   
    }
     $ins="update history set totals='$n',correct='$result',wrong='$wrong',score='$tscore',date=now() where email='$email' AND eid='$eid' ";
      mysqli_query($conn,$ins);
     //insertion in history
     //insertion in rank
     $chck="select * from ranks where email='$email' ";
     $rslt=$conn->query($chck);
     if($rslt->num_rows==0)
     {
      $sql="insert into ranks values ('$email','0')";
      mysqli_query($conn,$sql);   
   }
     $sql=mysqli_query($conn,"select * from history where email='$email'");
    $score=0;
    while($row=mysqli_fetch_array($sql))
    {
     $score+=$row['score'];
    }
    $sql1="update ranks set rank='$score' where email='$email' ";
    mysqli_query($conn,$sql1); 

    echo '<div class="col-sm-9 col-md-8" id="gob">
    <div class="card text-center">
    <div class="card-header">
        <h3>RESULT</h3>
    </div>
        <div class="card-title">
            <p class=" mt-2 text-secondary"><b>total question:'.$n.'</b></p>
            <p class=" mt-2 text-secondary"><b>you attempt:'.@$attempt.'</b></p>
            <p class="text-primary">correct attempt question:'.$result.'</p>
            <p class="text-danger">wrong attemp answer:'.$wrong.'</p>
            <p class="text-success">total score:'.$tscore.'</p>
        
    </div>
</div>
</div>
 ';
}

?>
</div>
</div>
<?php
include('includes/footer.php')
?>



