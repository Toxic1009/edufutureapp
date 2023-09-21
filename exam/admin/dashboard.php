<?php
session_start(); 
define('TITLE','dashboard.php');
define('page','dashboard.php');
include('includes/header.php');
include('../dbcon.php');

if(!isset($_SESSION['radmin']))
{
    header("location:adminlogin.php");
}


  echo' <div class="col-sm-9 col-md-10 text-center" id="gob">
    <p class="p-2 mt-2 text-white " style="background-color: rgba(0, 0, 0, 0.6);">List of User</p>';

//table
$sql="select * from user";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
    echo '<table class="table"  style="color:white; background-color: rgba(0, 0, 0, 0.4);">
    <tbody>
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Collage</th>
    <th>Email</th>
    <th>Mobile</th>
    </tr>
    
    ';
    $c=1;
    while($row=$result->fetch_assoc())
    {
     echo '<tr>
     <th>'.$c++.'</th>
     <td>'.$row["name"].'</td>
     <td>'.$row["collage"].'</td>
     <td>'.$row["email"].'</td>
     <td>'.$row["mob"].'<a title="Delete user" class="btn btn-dark ml-5" href="update.php?uemail='.$row["email"].'"><i class="far fa-trash-alt"></i></a</td>
     </tr>';
    } 
    echo '<tbody>
    </table>
     ';  
}
?>
</div>
<?php
include('includes/footer.php');
?>