<?php
include "dbconnect.php";
session_start();
$profile=$_SESSION['login'];
if($profile==true)
{
}
else{
    header("location:login.php");
}
echo "welcome " .$profile;
$sql="select * from ncit where Name='$profile'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<br>
<img src="<?php echo $row['Picture']?>" alt="" height="200px">
<br>
<a href="logout.php">
    <button>Logout</button>
</a>