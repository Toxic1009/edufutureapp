<?php
session_start(); 
define('TITLE','feedback.php');
define('page','feedback.php');
include('includes/header.php');
include('../dbcon.php');

if(!isset($_SESSION['radmin']))
{
    header("location:adminlogin.php");
}


  echo' <div class="col-sm-9 col-md-10 text-center" id="gob">
    <p class="p-2 text-white "  style="background-color: rgba(0, 0, 0, 0.6);">User Feedback</p>';

//table
$sql="select * from feedbacks";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
    echo '<table class="table"  style="color:white; background-color: rgba(0, 0, 0, 0.4);">
    <tbody>
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Time</th>
    <th>Action</th>
    </tr>
    
    ';
    $c=1;
    while($row=$result->fetch_assoc())
    {
     echo '<tr>
     <th>'.$c++.'</th>
     <td>'.$row["name"].'</td>
     <td>'.$row["email"].'</td>
     <td>'.$row["date"].'</td>
     <td><a title="show feedback" class="btn btn-primary mr-2 mb-2" href="afeedback.php?q=showfdbk&fdbkid='.$row["id"].'"><i class="fas fa-folder"></i></a>
     <a title="user feedback" class="btn btn-primary" href=update.php?q=dfdbk&id='.$row['id'].'"><i class="far fa-trash-alt"></i></a>
     </td>
     </tr>';
    } 
    echo '<tbody>
    </table></div></div></div>
     ';  
}

if(isset($_GET['fdbkid']))
{
  $fid=$_GET['fdbkid'];
  $sql=mysqli_query($conn,"select * from feedbacks where id='$fid'");
while($row=mysqli_fetch_array($sql))
{
  $name=$row['name'];
  $date=$row['date'];
  $subject=$row['subject'];
  $email=$row['email'];
  $desc=$row['description'];
echo'<div class="container mt-4" style="width:90%";> 
  <div class="card">
  <div class="card-header bg-dark text-center text-white font-weight-bold"><h4>Sender Name: '.$name.'</h4></div>
  <div class="card-title text-center text-danger"><h5>date of sending: '.$date.'</h5></div>
  <div class="card-title text-center text-primary"><p class="font-weight-bold">email: '.$email.'</p></div>
  <div class="card-title text-center text-secondary"><p>Feedback: '.$desc.'</p></div>
</div>
</div>';
}
}
?>
<?php
include('includes/footer.php');
?>