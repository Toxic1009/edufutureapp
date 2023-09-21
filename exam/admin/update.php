<?php
include_once '../dbcon.php';
session_start();
if(!isset($_SESSION['radmin']))
{
    header("location:login.php");
}

//delete user

if (@$_GET['uemail'])
{
 $uemail=$_GET['uemail'];
 $sql=mysqli_query($conn,"Delete from user where email='$uemail'");
 $sql=mysqli_query($conn,"Delete from history where email='$uemail'");
 $sql=mysqli_query($conn,"Delete from ranks where email='$uemail'");
 header("location:dashboard.php");
}
?>
<?php
//add question
if(isset($_REQUEST['addquiz']))
{
if($_GET['q']=='adding')
{
    $eid=$_SESSION['eid'];
    $n=$_SESSION['qns'];
    for($i=1;$i<=$n;$i++)
    {
    $id=uniqid();
    $qns=$_REQUEST['qns'.$i];
    $sql=mysqli_query($conn,"insert into question values ('$eid','$id','$qns')");
        for($j=97;$j<=100;$j++)
        {   
            $optionid=uniqid();
            $option=$_REQUEST[chr($j).$i];
            $sql=mysqli_query($conn,"insert into options values ('$optionid','$id','$option')");
            $s=$_REQUEST['ans'.$i];

            $a=$_REQUEST['ans'.$i];
            switch($a)
            {
            case 'a':
                if ($j==97)
                { $ans=$optionid;  }
                break;
            case 'b':
                if ($j==98)
                { $ans=$optionid;  }
                break;
            case 'c':
                if ($j==99)
                { $ans=$optionid;  }
                break;
            case 'd':
                if($j==100)
                { $ans=$optionid;  }
                break;
            }   
        }
     $sql=mysqli_query($conn,"insert into answer values ('$eid','$id','$ans')");

    }
    header("location:showquiz.php");  
 }
}
//delete feedback
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $sql=mysqli_query($conn,"Delete from feedbacks where id='$id'");
  header("location:afeedback.php");
}

// delete quiz question,option and answer
if($_GET['q']=='deleteqns')
{
    if(isset($_GET['eid']))
    {
        $eid=$_GET['eid'];
        $sql=mysqli_query($conn,"select * from question where eid='$eid'");
        while($row=mysqli_fetch_array($sql))
        {
            $qid=$row['id'];
            $a=mysqli_query($conn,"delete from options where id='$qid'");
            $b=mysqli_query($conn,"delete from answer where id='$qid'");
        }
        $c=mysqli_query($conn,"delete from history where eid='$eid'");
        $d=mysqli_query($conn,"delete from question where eid='$eid'");
        $e=mysqli_query($conn,"delete from quiz where eid='$eid'");
        header("location:showquiz.php");
    }
}
?>
