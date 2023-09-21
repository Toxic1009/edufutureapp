<?php
session_start(); 
define('TITLE','unotification.php');
define('page','unotification.php');
include('includes/header.php');
include('../dbcon.php');
// /////////////////////////////////////////////////////////////
if(!isset($_SESSION['ruser']))
{
    header("location:login.php");
}
echo' <div class="col-sm-9 col-md-10 text-center" id="gob">
<p class="p-2 text-white "  style="background-color: rgba(0, 0, 0, 0.6);">Notice Board</p>';
// $sql="select * from notifications";
// $sql=mysqli_query($conn,"select * from notifications");
// $result=$conn->query($sql);
// if ($result->num_rows>0)
// {
    echo '<table class="table"  style="color:white; background-color: rgba(0, 0, 0, 0.4);">
    <tbody>
    <tr>
    <th>Id</th>
    <th>Notification Title</th>
    <th>Faculty Name</th>
    <th>Time</th>
    <th>Action</th>
    </tr>
    
    ';
    $sql=mysqli_query($conn,"select * from notifications");
    $c=1;
    while($row=mysqli_fetch_assoc($sql))
    // while($row=$result->fetch_assoc())
    {
     echo '<tr>
     <th>'.$c++.'</th>
     <td>'.$row["notification_title"].'</td>
     <td>'.$row["name"].'</td>
     <td>'.$row["date"].'</td>
     <td><a title="show notification" class="btn btn-primary mr-2 mb-2" href="unotification.php?q=showfdbk&fdbkid='.$row["id"].'"><i class="fas fa-folder"></i></a>
     <a title="notification" class="btn btn-primary" href=aupdate.php?q=dfdbk&id='.$row['id'].'"><i class="far fa-trash-alt"></i></a>
     </td>
     </tr>';
    } 
    echo '<tbody>
    </table></div></div></div>
     ';  


if(isset($_GET['fdbkid']))
{
  $fid=$_GET['fdbkid'];
  $sql=mysqli_query($conn,"select * from notifications where id='$fid'");
while($row=mysqli_fetch_array($sql))
{
  $notification_title=$row['notification_title'];
  $date=$row['date'];
  $name=$row['name'];
  $details=$row['details'];
echo'<div class="container mt-4" style="width:90%";> 
  <div class="card">
  <div class="card-header bg-dark text-center text-white font-weight-bold"><h4>Faculty Name: '.$name.'</h4></div>
  <div class="card-title text-center text-danger"><h5>Date of publish: '.$date.'</h5></div>
  <div class="card-title text-center text-primary"><p class="font-weight-bold">Notice title: '.$notification_title.'</p></div>
  <div class="card-title text-center text-secondary"><p>Details: '.$details.'</p></div>
</div>
</div>';
/////////////////////////////////////////////////////////////////////////////////////
}
}
?>
<?php
include('includes/footer.php');
?>