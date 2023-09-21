<?php
define('TITLE','showquiz.php');
define('page','showquiz.php');
include('includes/header.php');
include_once('../dbcon.php');
session_start(); 
if(!isset($_SESSION['radmin']))
{
    header("location:adminlogin.php");
}


 echo' <div class="col-sm-9 col-md-10" id="gob">
 <p class="p-2 text-white text-center " style="background-color: rgba(0, 0, 0, 0.6);">List of quiz</p>';
$sql="select * from quiz";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    echo '<table class="table"  style="color:white; background-color: rgba(0, 0, 0, 0.4);">
    <tbody>
    <tr>
    <th>No</th>
    <th>Quiz</th>
    <th>Total question</th>
    <th>mark</th>
    <th>-mark</th>
    <th>Time limit</th>
    <th>Action</th>
    </tr>';
    $c=1;
    while($row=$result->fetch_assoc())
    {
        $eid=$row['eid'];
        $total=$row['total'];
    echo '<tr>
    <td>'.$c++.'</td>
    <td>'.$row["title"].'</td>
    <td class="pl-5">'.$row["total"].'</td>
    <td class="pl-4">'.$row["correct"].'</td>
    <td class="pl-4">'.$row["wrong"].'</td>
    <td>'.$row["time"].' min</td>
    <td><a class="btn btn-secondary" href="quizquestion.php?q=quizquestion.php&eid='.$eid.'&total='.$total.'">Start</a>
    <a class="btn btn-secondary mt-1" href="update.php?q=deleteqns&eid='.$eid.'"><i class="fas fa-trash"></i></a></td>
    </tr>';
    }
   echo' <tbody> </table>';
}
?>
</div>

<?php
include('includes/footer.php');
?>
