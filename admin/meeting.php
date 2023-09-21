<?php
define('TITLE','meeting.php');
define('page','meeting.php');
include_once('../dbcon.php');
session_start();
include('includes/header.php');
if(!isset($_SESSION['radmin']))
{
    header("location:adminlogin.php");
}
if(isset($_REQUEST['submit']))
{
    if(($_REQUEST["meeting_title"]=="") || ($_REQUEST["link"]==""))
  {
    $msg="All field are require";
  }
  else
  {
   $meeting_title=$_REQUEST['meeting_title'];
   $time=$_REQUEST['time'];
   $name=$_REQUEST['name'];
   $link=$_REQUEST['link'];
  $sql="insert into meetings values ('','$meeting_title','$time','$name','$link',now())";
    if($conn->query($sql) == TRUE)
    {
    $msg="meeting created successfully";
    }
    else{
        $msg="Unable to create meeting";
        }
  }
}
?>

</script>
<div class="offset-md-1 offset-sm-2 col-sm-6 col-md-7" id="gob">
    <div class="col-md-7 col-sm-6 offset-md-3 text-white" style="background-color: rgba(0, 0, 0, 0.2); padding-top: 5px; padding-bottom: 9px;">
    <h2 class="text-center mt-3" style="color: white; font-weight: bold;">Enter new meetings</h2>
    <form action="" method="POST" class="p-3" id="myForm">
        <div class="form-group">
            <label for="meeting_title" class="font-weight-bold">Title</label>
            <input type="text" placeholder="Enter meeting Title" class="form-control" name="meeting_title" require>
        </div>
        <div class="form-group">
            <label for="time" class="font-weight-bold">Timings</label>
            <input type="text" placeholder="Enter meeting timings" class="form-control" name="time" require>
        </div>
        <div class="form-group">
            <i class="fas fa-user mr-2"></i><label for="name" class="font-weight-bold">Posted by</label>
            <input type="text" class="form-control" placeholder="Enter faculty name" name="name" require>
        </div>
        <div class="form-group">
            <label for="link" class="font-weight-bold">Meet Link</label>
            <input type="url" class="form-control" placeholder="Enter meet link" name="link" require>
        </div>
        <button type="submit" class="btn btn-danger mt-2 p-1 font-weight-bold mr-4" name="submit" style="color: white;">Update Meeting Details</button>
        <p class="alert"><?php if(isset($msg)) echo $msg ?></p>
        <!-- <h3 class="text-center mt-3" style="color: white; font-weight: bold;">Meeting-Options</h3><br> -->
        <a href="includes/meet.html" target="_blank"><button id="submit" type="button" class="btn btn-info mt-2 p-1 font-weight-bold mr-4" >Open Meet & Share URL</button></a>

        <!--  -->
          <head>
  <script src='https://meet.jit.si/external_api.js'></script>
</head>
<body>

<button id="start" type="button" class="btn btn-white mt-2 p-1 font-weight-bold mr-4" >Start Instant Meeting</button>
<div id="jitsi-container" >
</div>

<script>
var button = document.querySelector('#start');
var container = document.querySelector('#jitsi-container');
var api = null;

button.addEventListener('click', () => {
    var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var stringLength = 30;

    function pickRandom() {
    return possible[Math.floor(Math.random() * possible.length)];
    }

var randomString = Array.apply(null, Array(stringLength)).map(pickRandom).join('');

    var domain = "meet.jit.si";
    var options = {
        "roomName": randomString,
        "parentNode": container,
        "width": 600,
        "height": 600,
    };
    api = new JitsiMeetExternalAPI(domain, options);
});

</script>
</body>
</html>
        <!--  -->
    </form></div>
</div>
<?php
include('includes/footer.php');
?>
