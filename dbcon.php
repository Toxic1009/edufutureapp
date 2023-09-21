
<?php
// create db connection
$conn=new mysqli("localhost","root","","exam");
if($conn->connect_error) {
    die("connection failed");
   }

?>