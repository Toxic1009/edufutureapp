<?php
session_start(); 
define('TITLE','addquestion');
define('page','addquestion');
include('includes/header.php');
include_once('../dbcon.php');
if(!isset($_SESSION['radmin']))
{
    header("location:adminlogin.php");
}

  echo'  <div class="offset-md-1 offset-sm-2 col-sm-6 col-md-6" id="gob">
    <h2 class="text-center" style="color:white; font-weight:bold; " >Enter question:</h2>
     <form action="update.php?q=adding" method="POST">';

        $n=$_SESSION['qns'];
        for($i=1; $i<=$n; $i++)
        {
       echo '<b style="color:white;">Question no:'.$i.'</b>';

    echo ' <textarea name="qns'.$i.'" id="qns" class="form-control" placeholder="Enter your question"></textarea><br>';
        for($j=97;$j<=100;$j++)
        {
      echo'   <div class="form-group">
            <input type="text" class="form-control" name="'.chr($j).$i.'" placeholder="enter option '.chr($j).'"> 
            </div> ';
        }
  echo' <h4 style="color:white;">correct answer:</h4>  
    <select name="ans'.$i.'" id="'.$i.'" class="form-control">
    <option value="a">select answer for question</option>
    <option value="a">option a</option>
    <option value="b">option b</option>
    <option value="c">option c</option>
    <option value="d">option d</option>
    </select></br>';
    }
    ?>
 <div class="submit">
     <button type="submit" class="btn btn-light my-3 ml-5" name='addquiz' style="color: black;">submit</button>
 </div>
</form>
 </div>

 <?php
include('includes/footer.php');
?>
