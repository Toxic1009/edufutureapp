<?php
session_start();
define('TITLE','history.php');
define('page','history.php');
include('../dbcon.php');
include('includes/header.php');
if(isset($_SESSION['radmin']))
{
    $email= $_SESSION['remail'];  
}
else
{
    header("location:adminlogin.php");
}

 echo'    <div class="col-sm-9 col-md-10 text-center" id="gob">
    <p class="p-2 text-white "  style="background-color: rgba(0, 0, 0, 0.6);">History of Marks Scored</p> ';

//table
if(isset($email))
{
$sql="select * from history where email='$email'";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
    echo '<table class="table"  style="color:white; background-color: rgba(0, 0, 0, 0.4);">
    <tbody>
    <tr>
    <th>No</th>
    <th>Title</th>
    <th>question</th>
    <th>Right</th>
    <th>Wrong</th>
    <th>Total</th>
    </tr>
    
    ';
    $c=1;
    while($row=$result->fetch_assoc())
    {
        $eid=$row['eid'];
        $query1=mysqli_query($conn,"select title from quiz where eid='$eid' ");
        while($row1=mysqli_fetch_array($query1))
        {
            $title=$row1['title'];
        }
     echo '<tr>
     <th>'.$c++.'</th>
     <td>'.$title.'</td>
     <td>'.$row["totals"].'</td>
     <td>'.$row["correct"].'</td>
     <td>'.$row["wrong"].'</td>
     <td>'.$row["score"].'</td>
     </tr>';
    } 
    echo '<tbody>
    </table>
    </div>
    
     '; 
  }
}
?>
<?php
include('includes/footer.php')
?>