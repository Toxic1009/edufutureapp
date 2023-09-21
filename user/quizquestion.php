<?php
session_start();
include('includes/header.php');
include('../dbcon.php');
define('page','quizquestion.php');
define('TITLE','question.php');
?>
<div class="col-sm-9 col-md-9" id="gob">
<?php
if($_GET['q']=='quizquestion.php')
{   
    $eid=$_REQUEST['eid'];
    $sql=mysqli_query($conn,"select * from question where eid='$eid'");
    $c=1;
     while($row=mysqli_fetch_array($sql))
     {
         $qns=$row['qns'];
         $qid=$row['id'];
         $total=$_REQUEST['total'];
         $_SESSION['total']=$total;
         echo' <form action="result.php?qid='.$qid.'&eid='.$eid.'" method="POST">';
         echo '<div class="card">
             <div class="card-header"  style="background-color: #4d8c61;">
                 <h4 style="color:white; font-weight:bold;">'.$c++. '. '.$qns.'</h4>
                 </div>
                 <div class="card-body"  style="background-color: #a4cdb1;">';
                  $sq=mysqli_query($conn,"select * from options where id='$qid'");
                  while($row1=mysqli_fetch_array($sq))
                  {
                    $option=$row1['optn'];
                 //   $qid1=$row1['id'];
                    $optionid=$row1['optionid'];
                    echo ' <input type="radio" name="uid['.$c.']" value="'.$optionid.'" >'.$option.'<br>';
                  }
                 
                 echo'</div>
                 
         </div>';
     }
     echo' </br><button type="submit" name="result" class="btn light m-auto d-block" style="color:black;">submit</button>
   </form> ';
     
}
?>
</div>

<?php
include('includes/footer.php')
?>